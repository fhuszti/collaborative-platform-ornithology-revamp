<?php
namespace AppBundle\Service\Mailer;

use AppBundle\Entity\Email;

class MailerNotificator {
	protected $mailer;

	protected $twig;

	public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig) {
		$this->mailer = $mailer;
		$this->twig = $twig;
	}







	/**
	 * MAIL SENDER
	 * -----------
	 */

	//render an html template
	public function renderTemplate($entity, $imgUrl, $template) {
		return $this->twig->render(
			'email/'.$template.'.html.twig',
			array(
				'entity' => $entity,
				'imgUrl' => $imgUrl
			)
		);
	}

	//send an email to the client containing his tickets
	public function sendEmail(Email $entity, $template) {
		$subject = $entity->getTitle();

		$mail = \Swift_Message::newInstance();

		$img = $mail->embed(\Swift_Image::fromPath('http://fhuszti.com.s3.amazonaws.com/nao/logo.png'));
		
		$body = $this->renderTemplate($entity, $img, $template);
		
		$mail->setSubject($subject)
			 ->setFrom('contact@fhuszti.tech')
			 ->setTo('f.huszti@gmail.com')
			 ->setBody(
				 $body,
				 'text/html'
			 );

		$this->mailer->send($mail);
	}
	
	/**
	 * -----------
	 */
}
