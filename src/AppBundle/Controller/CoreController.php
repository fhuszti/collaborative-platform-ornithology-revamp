<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Service\Mailer\MailerNotificator;
use AppBundle\Form\Type\ContactType;
use AppBundle\Entity\Bird;
use AppBundle\Entity\Observation;
use AppBundle\Entity\Email;

class CoreController extends Controller
{
    /**
     * @Route("/", name="core_home")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('core/home/index.html.twig');
    }



    /**
     * @Route("/projet", name="core_project")
     * @Method("GET")
     */
    public function projectAction()
    {
        return $this->render('core/project/project.html.twig');
    }



    /**
     * @Route("/observation", name="core_observation")
	 * @Method({"GET", "POST"})
     */
    public function observationAction()
    {
		return $this->render('core/observation/observation.html.twig');
    }



	/**
     * @Route("/contact", name="core_contact")
     * @Method({"GET", "POST"})
     */
    public function contactAction (MailerNotificator $mailer, Request $request, SessionInterface $session)
    {
		$email = new Email();

		$form = $this->createForm(ContactType::class, $email);

		$form->handleRequest($request);

		if ( $form->isSubmitted() ) {
			if ( $form->isValid() ) {
	            $mailer->sendEmail($email, 'contact');

	            $session->getFlashbag()->add('success', "Votre message nous a bien été envoyé. Nous vous répondrons dès que possible à l'adresse email fournie.");

	            //prevent resubmission en page refresh and prevent form from being already filled on page load
	            return $this->redirectToRoute('core_contact');
	        }
	        else {
	            $session->getFlashbag()->add('error', "Erreur lors de l'envoi. Vérifiez que tous les champs soient bien valides avant d'envoyer le formulaire.");
	        }
	    }

        return $this->render('core/contact/contact.html.twig', array(
        	'emailForm' => $form->createView()
        ));
    }



    /**
     * @Route("/recherche", name="core_search")
     * @Method("GET")
     */
    public function searchAction()
	{
	    return $this->render('core/search/search.html.twig');
	}

	/**
     * @Route("/recherche/ajax", name="core_ajax_search")
     * @Method("GET")
     */
    public function ajaxSearchAction(EntityManagerInterface $em)
	{
        //we return the full list of birds with common and latin name, ordered by ID
        $birds = $em->getRepository('AppBundle:Bird')
                    ->createQueryBuilder('b')
					->select('b.id,b.lb_nom,b.nom_vern')
					->getQuery()
					->getArrayResult();

		$birdsJSON = json_encode($birds, JSON_UNESCAPED_UNICODE);
		$response = new Response($birdsJSON);
		$response->headers->set('Content-Type', 'application/json');

        return $response;
	}

    /**
     * @Route("/oiseau/{id}", requirements={"id" = "\d+"}, name="core_bird")
     * @Method("GET")
     */
    public function birdAction(Bird $bird)
    {
        return $this->render('core/search/bird.html.twig', array(
            'bird' => $bird
        ));
    }

    /**
     * @Route("/oiseau/ajax/{id}", requirements={"id" = "\d+"}, name="core_ajax_bird")
     * @Method("GET")
     */
    public function ajaxBirdAction(Bird $bird, EntityManagerInterface $em)
    {
        //we return the full list of observations associated with the current bird
        $observations = $em->getRepository('AppBundle:Observation')
                    	   ->createQueryBuilder('o')
                    	   ->andWhere('o.status = :status')
						   ->setParameter('status', true)
						   ->andWhere('o.bird = :bird')
						   ->setParameter('bird', $bird)
						   ->select('o.lattitude,o.longitude,o.comment')
						   ->getQuery()
						   ->getArrayResult();

        return new JsonResponse($observations);
    }
}
