<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\UserManagerInterface;
use AppBundle\Service\Form\FormManager;
use UserBundle\Form\Type\UserEditType;
use UserBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"}, name="admin_user_delete")
     * @Method("GET")
     */
    public function userDeleteAction(UserManagerInterface $um, SessionInterface $session, User $user)
    {
        $um->deleteUser($user);

        $session->getFlashbag()->add('success', 'Utilisateur supprimé avec succès !');

        return $this->redirectToRoute('admin_home');
    }





    /**
     * @Route("/edit/{id}", requirements={"id" = "\d+"}, name="admin_user_edit")
     * @Method({"GET", "POST"})
     */
    public function userEditAction(FormManager $fm, Request $request, SessionInterface $session, User $user)
    {
        //generate the edit user form
        $editUserForm = $fm->generateForm('editUserForm', UserEditType::class, $user, $request);
        
        


        //create a unique success message
        $successMessage = 'Utilisateur modifié avec succès !';
        
        //manage everything for the form submission
        $editUserResponse = $fm->submitUserType( $editUserForm, $user, $session, $successMessage );
        
        //if response is true, we good to go
        if ( $editUserResponse )
            return $this->redirectToRoute('admin_home');



        $action = $this->generateUrl(
            'admin_user_edit',
            array('id' => $user->getId())
        );

        


        return $this->render('admin/blocks/users/form.html.twig', array(
            'form' => $editUserForm->createView(),
            'action' => $action
        ));
    }
}
