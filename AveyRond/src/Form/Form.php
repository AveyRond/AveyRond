<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Article;
use Doctrine\ORM\EntityRepository;

class Form extends AbstractType
{
	
	/**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Actualité' => 1,
                    'Interview' => 2,
                    'Résultat' => 3,
                    'Classement Buteur' => 4,
                    'Mercato' => 5,
                ], 'attr' => array('class' => 'form-control')
            ])

            ->add('title', TextType::class, array('label'=>'Titre', 'attr' => array(
                'class' => 'form-control',
                'title' => 'Titre',
            )))

            ->add('content', TextareaType::class, [
                'label' => 'Contenu',
				'attr' => ['class' => 'form-control',],
            ])
            
            ->add('author', TextType::class, array('label'=>'Auteur', 'attr' => array(
                'class' => 'form-control',
                'title' => 'Auteur',
            )))

            ->add('image', UrlType::class,[
               'label' => "Mettez l'URL de l'image",
               'attr' => array('class' => 'form-control')
            ])
			->add('save', SubmitType::class, array(
				'label' => 'Enregistrer',
				'attr' => array(
					'class' => 'btn btn-primary btn-margin',
					'title' => 'Enregistrer'
				)
			));
				
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Article',
			'route'=>null
        ));
    }
}
