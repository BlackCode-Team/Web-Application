<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Length;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet',TextType::class, [
                    'attr' => ['placeholder' => 'Objet']
                    ])
            ->add('contenu', TextareaType::class, [
                    'attr' => ['placeholder' => 'Contenu de la reclamation'],
                    'constraints' => [
                        new Length([
                            'min' => 15,
                            'max' => 500,
                            'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caractères (sans les espaces).',
                            'maxMessage' => 'Le contenu ne doit pas dépasser {{ limit }} caractères (sans les espaces).'
                            ])
                        ]
                    ])
            
            ->add('date', DateTimeType::class, [
                    'data' => new \DateTime(),
                    'disabled' => true,
                    ])
            ->add('vehicule', EntityType::class, [
                'class' => Vehicule::class,
                'choice_label' => 'matricule',
                'placeholder' => 'Choose a vehicle',
                ])
            ->add('submit', SubmitType::class, [
                    'label' => 'Envoyer la reclamation',
                ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
