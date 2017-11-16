<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Form\ObservationType;
use AppBundle\Entity\Observation;

class ObservationController extends Controller
{
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
