<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Regex;

use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\Validator\Constraints\Range;

use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                    'choices' => [
                        'Voiture' => 'Voiture',
                        'Trottinette' => 'Trottinette',
                    ],
                    'placeholder' => 'Choisir le type',
                    'required' => true,])
            ->add('modele',TextType::class)
            ->add('matricule', TextType::class, [
                    'constraints' => [
                        new Regex([
                            'pattern' => '/^\d{3}\s?[A-Z]{3}\s?\d{4}$/',
                            'message' => 'Le format de la plaque d\'immatriculation doit être 123TUN4599 '
                        ])
                    ]])
            ->add('puissance', IntegerType::class, [
                    'constraints' => [
                        new Callback([$this, 'validatePuissance'])
                    ]])
            ->add('batterie',IntegerType::class, [
                    'data' => 100,
                    'attr' => ['readonly' => true],])
            ->add('prix',IntegerType::class)
            ->add('image', FileType::class, [
                'data_class' => null,
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPEG, PNG, GIF).',
                    ])
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'submit',
            ])
            
            
        ;
    }


    public function validatePuissance($value, ExecutionContextInterface $context)
    {
        $type = $context->getRoot()->get('type')->getData();
        if ($type === 'voiture' && ($value < 100 || $value > 500)) {
            $context->buildViolation('La puissance doit être entre 50 et 300 pour une voiture électrique')
                ->addViolation();
        } elseif ($type === 'trottinette' && ($value < 50 || $value > 500)) {
            $context->buildViolation('La puissance doit être entre 100 et 500 pour une trottinette électrique')
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
