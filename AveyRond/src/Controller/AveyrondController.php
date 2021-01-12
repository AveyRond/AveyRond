<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\CategoryArticle;

class AveyrondController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        
        $articles = $repo->findAll();

        return $this->render('aveyrond/index.html.twig', [
            'controller_name' => 'AveyrondController',
            'articles' => $articles
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

    /**
     * @Route("/{id}", name="show")
     */
    public function show($id): Response
    {   
        $repo = $this->getDoctrine()->getRepository(Article::class);
        
        $articles = $repo->find($id);

        return $this->render('aveyrond/show.html.twig', [
            'article' => $articles
        ]);
    }
}
