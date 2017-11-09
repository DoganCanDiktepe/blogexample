<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{

    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction (Request $request)
    {
	    $response = array(
	    	'error' => 1,
		    'msg' => null
	    );
    	$contact = new Contact();
    	$form = $this->createForm(ContactType::class);
    	$form->handleRequest($request);
    	
        if($form->isSubmitted() && $form->isValid()){
			$response['error'] = 0;
			$response['msg'] = $form->getData();
	    }
    
    	
    	
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig', ['form' => $form->createView(), 'formResponse' => $response]);
    }
}
