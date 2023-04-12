<?php

namespace App\Form;

use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextareaType::class, [
                'attr' => ['placeholder' => 'description'],
                'constraints' => [
                    new Length([
                        'min' => 15,
                        'max' => 500,
                        'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caractères (sans les espaces).',
                        'maxMessage' => 'Le contenu ne doit pas dépasser {{ limit }} caractères (sans les espaces).'
                        ])
                    ]
                ])
            ->add('datereponse', DateTimeType::class, [
                'data' => new \DateTime(),
                'disabled' => true,
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}
