<?php

namespace App\Form;

use App\Entity\Badge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class BadgeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typebadge',TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir le type de badge',
                    ])
                ],
            ])
            ->add('nbpoint',IntegerType::class,[
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir le nombre de point',
                    ])
                    ],
                ],
                new Positive([
                    'message' => 'Le nombre de point doit être positif',
                ]),
                new UniqueEntity([
                    'message' => 'Ce nombre de point est déjà utilisé',
                    'fields' => 'nbpoint'
                ])
            );
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Badge::class,
        ]);
    }
}
