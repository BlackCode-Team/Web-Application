<?php

namespace App\Form;

use App\Entity\Historique;
use App\Entity\Reservation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class HistoriqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
      
        ->add('reservation',EntityType::class,
        ['class'=>Reservation::class,
        'choice_label'=>'idreservation'])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Historique::class,
        ]);
    }
}
