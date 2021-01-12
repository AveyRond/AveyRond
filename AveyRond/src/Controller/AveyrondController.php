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

    /**
     * @Route("/interviews", name="interviews")
     */
    public function interviews(): Response
    {
        return $this->render('aveyrond/interviews.html.twig', [
            'controller_name' => 'AveyrondController',
        ]);
    }

    /**
     * @Route("/resultats", name="resultats")
     */
    public function resultats(): Response
    {
        return $this->render('aveyrond/resultats.html.twig', [
            'controller_name' => 'AveyrondController',
        ]);
    }

    /**
     * @Route("/buteurs", name="buteurs")
     */
    public function classButeurs(): Response
    {
        return $this->render('aveyrond/buteurs.html.twig', [
            'controller_name' => 'AveyrondController',
        ]);
    }

    /**
     * @Route("/mercato", name="mercato")
     */
    public function mercato(): Response
    {
        return $this->render('aveyrond/mercato.html.twig', [
            'controller_name' => 'AveyrondController',
        ]);
    }
}
