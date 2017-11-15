<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Bird;
use AppBundle\Entity\Observation;
use AppBundle\Entity\Email;
use AppBundle\Form\Type\ContactType;
use AppBundle\Service\Mailer\MailerNotificator;

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
     * @Route("/contact", name="core_contact")
     * @Method({"GET", "POST"})
     */
    public function contactAction (MailerNotificator $mailer, Request $request)
    {
		$email = new Email();

		$emailForm = $this->createForm(ContactType::class, $email);

        return $this->render('core/contact/contact.html.twig', array(
        	'emailForm' => $emailForm->createView()
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
