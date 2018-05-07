<?php
/**
 * Created by PhpStorm.
 * User: kriss
 * Date: 07/05/2018
 * Time: 11:53
 */

namespace AppBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ContactController extends Controller
{
    /**
     * @Route("/contact", name="app.contact")
     */
    public function contactAction()
    {
        return new Response("Contact page");

    }

}