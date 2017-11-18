<?php
namespace AppBundle\Service\Form;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use AppBundle\Service\Form\FormErrorsManager;

class FormManager {
	protected $em;

	protected $um;

	protected $fem;

	protected $ffi;

	public function __construct(EntityManagerInterface $em, UserManagerInterface $um, FormErrorsManager $fem, FormFactoryInterface $ffi) 
	{
		$this->em = $em;
		$this->um = $um;
		$this->fem = $fem;
		$this->ffi = $ffi;
	}




	//create a form and attach the request to it
	public function generateForm($name, $type, $entity, Request $request) 
	{
		$form = $this->ffi->createNamed($name, $type, $entity);
        $form->handleRequest($request);

        return $form;
	}




	//manage a user type submission and user update
	public function submitUserType($form, $user, SessionInterface $session, $successMessage = '') 
	{
		//define form fields to check for errors
		$fields = array('username', 'email', 'roles', 'plainPassword');
		
		//default success message if none given
		if ($successMessage === '')
			$successMessage = 'Utilisateur ajouté/modifié avec succès !';

		if ( $form->isSubmitted() ) {
            if ( $form->isValid() ) {
                $this->um->updateUser($user);

                $session->getFlashbag()->add('success', $successMessage);
            }
            else {
                $this->fem->globalErrors($form, $session);
                $this->fem->fieldsErrors($form, $fields, $session);
            }
            
            return true;
        }

        return;
	}




	//manage a single persist type submission and persist the underlying entity
	public function submitSinglePersistType($form, $entity, $fields, $session, $successMessage = '') 
	{
		//default success message if none given
		if ($successMessage === '')
			$successMessage = 'Contenu modifié avec succès !';

        if ( $form->isSubmitted() ) {
            if ( $form->isValid() ) {
                $this->em->persist($entity);
                $this->em->flush();

                $session->getFlashbag()->add('success', $successMessage);
            }
            else {
                $this->fem->globalErrors($form, $session);
                $this->fem->fieldsErrors($form, $fields, $session);
            }
            
            return true;
        }

        return;
	}
}
