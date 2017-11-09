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
    	
    	$aboutRepository = $this->getDoctrine()->getRepository('AppBundle:About');
    	$about = $aboutRepository->findAll();
    	
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig', ['about'=>$about[0]]);
    }

}
