<?php

namespace App\Form;

use App\Entity\Amende;
use App\Entity\Reservation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class AmendeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date',DateTimeType::class)
            ->add('montant')
            ->add('cause',TextareaType::class)
            ->add('description',TextareaType::class)
            ->add('statusamende', ChoiceType::class, [
                'choices' => [
                    'paye' => 'Paye',
                    'Non Paye' => 'Non paye',
                ]])  
            ->add('idreservation',EntityType::class,
        ['class'=>Reservation::class,
        'choice_label'=>'idreservation'])
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Amende::class,
        ]);
    }
}
