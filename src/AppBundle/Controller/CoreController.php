<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
     * @Route("/find/", name="find")
     */
    public function findAction(Request $request)
	{
	    $defaultData = array('message' => 'find here');
	    $form = $this->createFormBuilder($defaultData)
	        ->add('mySearch', TextType::class, array(

              'attr' => array(
                  'placeholder' => 'core.find.input_find','class' => 'form-control search-input input-lg',
              )))
	        ->getForm();

	    $form->handleRequest($request);

	    if ($form->isSubmitted() && $form->isValid()) {
	        // data is an array with "name", "email", and "message" keys
	        $data = $form->getData();
	    }

	    return $this->render('core/find.html.twig', array('form' => $form->createView()));
	}
    /**
     * @Route("/bird/{id}", name="bird")
     */
    public function birdAction($id)
	{
	    $bird = $this->getDoctrine()
	        ->getRepository(Bird::class)
	        ->find($id);
        $observations = $this->getDoctrine()
	        ->getRepository(Observation::class)
	        ->findBy(array( 'birdId' => $id));

	    if (!$bird) {
	        throw $this->createNotFoundException(
	            'Cet ID ne correspond à aucun oiseau.'
	        );
	    }

	    return $this->render('core/bird.html.twig', array('bird' => $bird, 'observations' => $observations));
	}
}
