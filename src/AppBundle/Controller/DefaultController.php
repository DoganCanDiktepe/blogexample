<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $blogRepository = $this->getDoctrine()->getRepository('AppBundle:Blog');
        $list = $blogRepository->findAll();

        return $this->render('default/index.html.twig', ['blogList' => $list]);
    }
	
	
	/**
	 * @param $id
	 *
	 * @Route("/detail/{id}", name="blog_detail")
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function showAction($id)
    {
    	$blogRepository = $this->getDoctrine()->getRepository('AppBundle:Blog');
    	$detail = $blogRepository->find($id);
    	
        return $this->render('default/detail.html.twig',['detail' => $detail]);
    }
}