<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('nom', TextType::class, [
            'required' => true,
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez saisir votre nom',
                ]),
            ],
        ]) 
        ->add('prenom', TextType::class, [
            'required' => true,
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez saisir votre prénom',
                ]),
            ],
        ])
        ->add('pwd', PasswordType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez saisir votre mot de passe',
                ]),
                new Length([
                    'min' => 8,
                    'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                    // vous pouvez ajouter plus de contraintes ici si nécessaire
                ]),
            ],
        ])
        ->add('email', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez saisir votre adresse email',
                ]),
                new Email([
                    'message' => 'L\'adresse email "{{ value }}" est invalide.',
                    // vous pouvez ajouter plus de contraintes ici si nécessaire
                ]),
            ],
        ])
        ->add('cin', TextType::class, [
            'required' => true,
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez saisir votre numéro CIN',
                ]),
                new Length([
                    'min' => 8,
                    'max' => 8,
                    'exactMessage' => 'Le numéro CIN doit contenir exactement {{ limit }} chiffres',
                    // vous pouvez ajouter plus de contraintes ici si nécessaire
                ]),
            ],
        ])
        ->add('permis', TextType::class, [
            'required' => true,
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez saisir votre numéro de permis de conduire',
                ]),
                new Length([
                    'min' => 9,
                    'max' => 9,
                    'exactMessage' => 'Le numéro de permis doit contenir exactement {{ limit }} chiffres',
                    // vous pouvez ajouter plus de contraintes ici si nécessaire
                ]),
            ],
        ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
