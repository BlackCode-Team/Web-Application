<?php

namespace App\Form;

use App\Entity\Park;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormView;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Length;


use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ParkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir le Nom du Park',
                    ])
                ],
            ])
            ->add('ville', TextType::class,[
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir la ville du Park',
                    ])
                ],
            ])
            ->add('nbspot', IntegerType::class,[
                'label' => 'Nombre de team',
                'attr' => [
                    'placeholder' => 'Saisissez le nombre des Spots ',
                    'min' => 10,
                    'max' => 300,
                    'step' => '10',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir  le nombre des Spots',
                    ])
                ],
            ])
            ->add('statut',  ChoiceType::class,[
                'required' => true,
                'choices' => [
                    'Ouvert' => 'Ouvert',
                    'Fermé' => 'Fermé',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir Status du Park',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Park::class,
        ]);
    }
}
