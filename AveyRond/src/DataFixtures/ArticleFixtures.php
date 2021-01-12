<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\CategoryArticle;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <=15; $i++){
            $article = new Article();
            $article->setTitle("Titre de l'article n°$i")
                    ->setContent("<p>Contenu de l'article n°$i</p>")
                    ->setImage("http://placehold.it/350x150")
                    ->setCreatedAt(new \DateTime())
                    ->setAuthor("Moi");
                    // ->setCategory($categoryType);

            $manager->persist($article);
        }

        $manager->flush();
    }
}
