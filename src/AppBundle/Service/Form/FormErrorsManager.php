<?php
namespace AppBundle\Service\Form;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FormErrorsManager 
{

	//add errors from form level to session flashbag
	public function globalErrors($form, SessionInterface $session) 
	{
		$fullError = (string) $form->getErrors(true, false);

		$errors = explode('ERROR: ', $fullError);

		foreach ($errors as $error) {
            //from here on we clean the error message a little bit before adding it to the flashbag
            $cleanError = $error;

            //clean everything after the first "." of a message
            //(error messages are always one sentence long, and sometimes crap stays after the "." following the original explode() )
            $pos = strrpos($error, ".");
            if ( $pos !== false ) { 
                $cleanError = substr( $error, 0, $pos+1 ); 
            }
            //replace pesky stuff like "documents:" or "name:" that won't go away
            $pattern = '/\w*:/i';
            $cleanError = preg_replace($pattern, '', $cleanError);

	        $cleanError = trim($cleanError);

            //we get existing errors and only add those which are new
            $existingErrors = $session->getFlashbag()->peek('error');
            if ( !in_array($cleanError, $existingErrors) )
            	$session->getFlashbag()->add('error', $cleanError);
        }
	}

	//add errors from field level to session flashbag
	public function fieldsErrors($form, $fields = array(), SessionInterface $session) 
	{
		foreach ($fields as $field) {
	        foreach ($form[$field]->getErrors() as $key => $error) {
	            //we clean the error message a little bit
	            if (is_object($error))
	                $error = $error->getMessage();
	            
	            $pos = strrpos($error, ": ");
	            $cleanError = $error;
	            
	            if ( $pos !== false ) { 
	                $cleanError = substr( $error, $pos+1 );
	            }
	            $cleanError = trim($cleanError);
	            
	            //we get existing errors and only add those which are new
	            $existingErrors = $session->getFlashbag()->peek('error');
	            if ( !in_array($cleanError, $existingErrors) )
	            	$session->getFlashbag()->add('error', $cleanError);
	        }
	    }
	}
}
