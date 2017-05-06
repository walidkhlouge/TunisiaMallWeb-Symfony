<?php

namespace TunisiaMall\TMBundle\Controller\resEnsController;

use TunisiaMall\TMBundle\Entity\Mail;
use TunisiaMall\TMBundle\Form\MailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of TestMailController
 *
 * @author Hanene
 */
class TestMailController extends Controller {

    //put your code here


    

 
   public function redirectionAction() {

        return $this->render('TunisiaMallTMBundle:resEnsView:newMail.html.twig');
    }
    
     public function sendMailAction()
    {
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {
            $Subject = $Request->get("Subject");
            $email = $Request->get("email");
            $message = $Request->get("message");
            
            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername('contact.tunisiamall@gmail.com')
                    ->setPassword('highping');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Test')
                    ->setSubject($Subject)
                    ->setFrom('contact.tunisiamall@gmail.com')
                    ->setTo($email)
                    ->setBody($message);
            $this->get('mailer')->send($message);
        }
        return $this->render('TunisiaMallTMBundle:resEnsView:newMail.html.twig');
    }

   
}
