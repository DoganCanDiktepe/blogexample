<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{

    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction ()
    {
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig', array());
    }
}
