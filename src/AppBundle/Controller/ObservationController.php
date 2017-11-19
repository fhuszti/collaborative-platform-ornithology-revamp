<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Service\Form\FormManager;
use AppBundle\Form\Type\ObservationType;
use AppBundle\Entity\Observation;

class ObservationController extends Controller
{
    /**
     * @Route("/observation/{id}", requirements={"id" = "\d+"}, name="obs_details")
     * @Method("GET")
     */
    public function observationAction(Observation $observation)
    {
        return $this->render('@FOSUser/Profile/blocks/observations/observation.html.twig', array(
            'observation' => $observation
        ));
    }





    /**
     * @Route("/observation/ajouter", name="obs_add")
     * @Method({"GET", "POST"})
     */
    public function addObservationAction(FormManager $fm, Request $request, SessionInterface $session)
    {
        $observation = new Observation();

        //generate the add observation form
        $addObservationForm = $fm->generateForm('addObservationForm', ObservationType::class, $observation, $request);
        

        //create a unique success message
        $successMessage = 'Observation ajoutée avec succès !';
        //and a unique fields list
        $fields = array('bird', 'date', 'comment', 'image', 'longitude', 'lattitude');
        
        //manage everything for the add observation form submission
        $addObservationResponse = $fm->submitSinglePersistType( $addObservationForm, $observation, $fields, $session, $successMessage );
        
        //if response is true, we good to go
        if ( $addObservationResponse )
            return $this->redirectToRoute('core_observation');


        $action = $this->generateUrl('obs_add');

        
        return $this->render('core/observation/form/observation-type.html.twig', array(
            'form' => $addObservationForm->createView(),
            'action' => $action
        ));
    }





    /**
     * @Route("/admin/obs/validate/{id}", requirements={"id" = "\d+"}, name="admin_obs_validate")
     * @Method("GET")
     */
    public function obsValidateAction(EntityManagerInterface $em, Observation $obs)
    {
        $obs->setStatus(true);

        $em->persist($obs);
        $em->flush();

        return $this->redirectToRoute('admin_home');
    }





    /**
     * @Route("/admin/obs/await/{id}", requirements={"id" = "\d+"}, name="admin_obs_await")
     * @Method("GET")
     */
    public function obsAwaitAction(EntityManagerInterface $em, Observation $obs)
    {
        $obs->setStatus(null);

        $em->persist($obs);
        $em->flush();

        return $this->redirectToRoute('admin_home');
    }





    /**
     * @Route("/admin/obs/refuse/{id}", requirements={"id" = "\d+"}, name="admin_obs_refuse")
     * @Method("GET")
     */
    public function obsRefuseAction(EntityManagerInterface $em, Observation $obs)
    {
        $obs->setStatus(false);

        $em->persist($obs);
        $em->flush();

        return $this->redirectToRoute('admin_home');
    }
}
