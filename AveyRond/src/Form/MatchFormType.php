<?php

namespace App\Form;

use App\Entity\Matchs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MatchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Equipe', TextType::class, array('label' => 'Votre Equipe', 'attr' => array(
                'class' => 'form-control',
                'title' => 'Equipe',
            )))
            ->add('Adversaire', TextType::class, array('label' => 'Equipe adverse', 'attr' => array(
                'class' => 'form-control',
                'title' => 'Adversaire',
            )))
            ->add('DateMatch', DateTimeType::class, array('required' => true,
            'widget' => 'single_text',
            'attr' => [
                'class' => 'form-control input-inline datetimepicker',
                'data-provide' => 'datetimepicker',
                'html5' => false,
            ],
                'date_label' => 'Date du match', 
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Valider',
                'attr' => array(
                    'class' => 'btn btn-primary btn-margin',
                    'title' => 'Enregistrer'
                )
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Matchs',
        ]);
    }
}
