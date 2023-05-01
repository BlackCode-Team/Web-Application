<?php

namespace App\Form;

use App\Entity\Maintenance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Vehicule;
use Doctrine\ORM\EntityRepository; 
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MaintenanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('objet',TextType::class, [
            'attr' => ['placeholder' => 'Objet']
            ])
        ->add('datedebut', DateTimeType::class, [
             'disabled' => true,
 
             ])
         ->add('datefin',DateTimeType::class, [          
             'constraints' => [
                 new GreaterThan([
                     'value' => $builder->getData()->getDatedebut(),
                     'message' => 'La date de fin doit être supérieure à la date de début.'
                 ])
             ]
         ])
            ->add('vehicule', EntityType::class, [
                'class' => Vehicule::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('v')
                        ->where('v.status = :status')
                        ->setParameter('status', 'disponible');
                },
                'choice_label' => 'matricule',
                'placeholder' => 'choisir un vehicule',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'submit',
            ])  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maintenance::class,
        ]);
    }
}
