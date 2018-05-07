<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return new Response("Hello World !");

    }

    /**
     * @Route("/about-us", name="aboutus")
     */
    public function aboutAction()
    {
        return new Response("AboutUs");

    }

    /**
     * @Route("/redirect", name="redirect")
     * @return Response
     */
    public function redirectAction()
    {
        return $this->redirectToRoute("homepage");

    }


}
