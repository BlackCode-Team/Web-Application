<?php

namespace App\Form;

use App\Entity\Itineraire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


use Symfony\Component\Validator\Constraints\Regex;

class ItineraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pointdepart', TextType::class,[
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir le point de depart',
                    ]),new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'pointdepart "{{ value }}" n\'est pas valide',
                    ]),
                ],
            ])
            ->add('pointarrivee', TextType::class,[
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir le point d arrivé',
                    ]),new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'pointarrivee "{{ value }}" n\'est pas valide',
                    ]),
                ],
            ])
            ->add('kilometrage', IntegerType::class,[
                'label' => 'Nombre de team',
                'attr' => [
                    'placeholder' => 'Saisissez le nombre de teams',
                    'min' => 10,
                    'max' => 300,
                    'step' => '10',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir la distance pour location en KM',
                    ])
                ],
            ])
            ->add('dureeestimee', IntegerType::class,[
                'label' => 'Nombre de team',
                'attr' => [
                    'placeholder' => 'Saisissez la duree de location estime',
                    'min' => 1,
                    'max' => 12,
                    'step' => '1',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir la duree de location',
                    ])
                ],
            ])
            // ->add('nbUsage', IntegerType::class,[
            //     'label' => 'Nombre de team',
            //     'attr' => [
            //         'placeholder' => 'Saisissez le nombre de teams',
            //         'min' => 2,
            //         'max' => 100,
            //         'step' => '2',
            //     ],
            //     'required' => true,
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Veuillez saisir le nombre de teams',
            //         ])
            //     ],
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Itineraire::class,
        ]);
    }
}
