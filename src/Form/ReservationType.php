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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\GreaterThan;
class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('datedebut',DateType::class)
        ->add('datefin',DateType::class, [
            'constraints' => [
                new GreaterThan([
                    'value' => $builder->getData()->getDatedebut(),
                    'message' => 'La date de fin doit être supérieure à la date de début.'
                ])
            ]
        ])
        ->add('prixreservation')
        ->add('status', ChoiceType::class, [
            'choices' => [
             'En cours' => 'En cours',
            'Terminé' => 'Terminé',
            ]
        ])
        ->add('utilisateur',EntityType::class,
        ['class'=>Utilisateur::class,
        'choice_label'=>'prenom'])
        ->add('itineraire',EntityType::class,
        ['class'=>Itineraire::class,
        'choice_label'=>'pointarrivee'])
        ->add('vehicule',EntityType::class,
        ['class'=>Vehicule::class,
        'choice_label'=>'matricule'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
