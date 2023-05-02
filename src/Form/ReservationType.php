<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Utilisateur;
use App\Entity\Vehicule;
use App\Entity\Itineraire;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('datedebut', DateTimeType::class, [
           // 'data' => new \DateTime(),
            'disabled' => true,

            ])
        ->add('datefin',DateTimeType::class, [          
          //    'data' => new \DateTime(),
            'constraints' => [
                new GreaterThan([
                    'value' => $builder->getData()->getDatedebut(),
                    'message' => 'La date de fin doit être supérieure à la date de début.'
                ])
            ]
        ])
        
        ->add('prixreservation',IntegerType::class, [
           // 'data' => 0,
            'attr' => ['readonly' => true],
            ])
           // 'data' => 0,
        
                      // 'constraints' => [
            //     new GreaterThan([
            //         'value' => 0,
            //         'message' => 'Le prix doit être supérieur à zéro.',
            //         'disabled' => true
            //     ])
            // ]
        //])
        
        ->add('utilisateur', TextType::class, [
            'label' => 'Nom d\'utilisateur',
            'attr' => ['placeholder' => 'Saisir le nom d\'utilisateur']
        ])
        ->add('itineraire', TextType::class, [
            'label' => 'Itinéraire',
            'attr' => ['placeholder' => 'Saisir l\'itinéraire']
        ])
        ->add('vehicule', TextType::class, [
            'label' => 'Vehicule',
            
        ])
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
