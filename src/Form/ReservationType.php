<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('datedebut')
        ->add('datefin')
        ->add('prixreservation')
        ->add('status')
        ->add('iduser',EntityType::class,
        ['class'=>Utilisateur::class,
        'choice_label'=>'iduser'])
        ->add('iditineraire',EntityType::class,
        ['class'=>Itineraire::class,
        'choice_label'=>'iditineraire'])
        ->add('idvehicule',EntityType::class,
        ['class'=>Vehicule::class,
        'choice_label'=>'idvehicule'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
