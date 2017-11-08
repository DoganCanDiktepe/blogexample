<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function indexAction ()
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig', []);
    }

}
