<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->render('accueil.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    public function hello($nom){
        return $this->render('hello/hello.html.twig', ['nom' => $nom,]);
        //$res = "Salut à toi ".$nom." !";
        //return new Response($res);
    }
}
