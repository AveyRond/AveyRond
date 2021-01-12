<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AveyrondController extends AbstractController
{
    /**
     * @Route("/aveyrond", name="aveyrond")
     */
    public function index(): Response
    {
        return $this->render('aveyrond/index.html.twig', [
            'controller_name' => 'AveyrondController',
        ]);
    }

    /**
     * @Route("/actualites", name="actu")
     */
    public function actu(): Response
    {
        return $this->render('aveyrond/actualites.html.twig', [
            'controller_name' => 'AveyrondController',
        ]);
    }
}
