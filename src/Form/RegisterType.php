<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;



class RegisterType extends AbstractType
{
    private $tokenGenerator;
    private $tokenStorage;
    public function __construct(TokenGeneratorInterface $tokenGenerator, TokenStorageInterface $tokenStorage)
    {
        $this->tokenGenerator = $tokenGenerator;
        $this->tokenStorage = $tokenStorage;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire.']),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le nom ne doit contenir que des lettres.'
                    ])
                ]
            ])
            ->add('prenom', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le prénom est obligatoire.']),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Le prénom ne doit contenir que des lettres.'
                    ])
                ]
            ])
            ->add('pwd', PasswordType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le mot de passe est obligatoire.']),
                    new Length([
                        'min' => 8,
                        'max' => 32,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le mot de passe doit contenir au maximum {{ limit }} caractères.'
                    ])
                ]
            ])
            ->add('email', null, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse email est obligatoire.']),
                    new Email(['message' => 'L\'adresse email doit être une adresse email valide.'])
                ]
            ])
            ->add('cin', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de carte d\'identité nationale est obligatoire.']),
                    new Regex([
                        'pattern' => '/^\d{8}$/',
                        'message' => 'Le numéro de carte d\'identité nationale doit contenir exactement 8 chiffres.'
                    ])
                ]
            ])
            ->add('permis', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de permis de conduire est obligatoire.']),
                    new Regex([
                        'pattern' => '/^\d{9}$/',
                        'message' => 'Le numéro de permis de conduire doit contenir exactement 9 chiffres.'
                    ])
                ]
            ])
            ->add('csrf_token', HiddenType::class, [
                'data' => $this->tokenGenerator->generateToken(),
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'csrf_protection' => true,
            'csrf_field_name' => 'csrf_token',
            'csrf_token_id' => 'your_form',
        ]);
    }
}
