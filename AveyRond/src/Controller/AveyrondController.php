<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\CategoryArticle;
use App\Form\Form;

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
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articleActu = $repository->findBy(array('category' => 1));
        return $this->render('aveyrond/actualites.html.twig', [
            'articlesActu' => $articleActu
        ]);
    }

    /**
     * @Route("/interviews", name="interviews")
     */
    public function interviews(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articleInter = $repository->findBy(array('category' => 2));
        return $this->render('aveyrond/interviews.html.twig', [
            'articlesInter' => $articleInter
        ]);
    }

    /**
     * @Route("/resultats", name="resultats")
     */
    public function resultats(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articleResult = $repository->findBy(array('category' => 3));
        return $this->render('aveyrond/resultats.html.twig', [
            'articlesResult' => $articleResult
        ]);
    }

    /**
     * @Route("/buteurs", name="buteurs")
     */
    public function classButeurs(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articleClassB = $repository->findBy(array('category' => 4));
        return $this->render('aveyrond/buteurs.html.twig', [
            'articlesClassB' => $articleClassB
        ]);
    }

    /**
     * @Route("/mercato", name="mercato")
     */
    public function mercato(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articleMerca = $repository->findBy(array('category' => 5));
        return $this->render('aveyrond/mercato.html.twig', [
            'articlesMerca' => $articleMerca
        ]);
    }

    /**
     * @Route("/club", name="club")
     */
    public function club(): Response
    {
        return $this->render('aveyrond/club.html.twig', [
        ]);
    }

    /**
     * @Route("article/{id}", name="show_article")
     */
    public function show($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);

        $articles = $repo->find($id);

        return $this->render('aveyrond/show.html.twig', [
            'article' => $articles
        ]);
    }

    /**       
     * @Route("/formulaire", name="formulaire")
     */
    public function form(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(Form::class, $article, array());

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $article->setCategory($form['category']->getData());
            $article->setTitle($form['title']->getData());
            $article->setContent($form['content']->getData());
            $article->setAuthor($form['author']->getData());
            $article->setCreatedAt(new \DateTime());
            $article->setImage($form['image']->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            $this->addFlash(
                'notice',
                'Création d\'un article validé',
            );

            return $this->redirectToRoute('accueil');
        }

        return $this->render('aveyrond/formulaire.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'AveyrondController',
        ]);
    }
}
