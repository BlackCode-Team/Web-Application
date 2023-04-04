<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reclamation3Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet',TextType::class)
            ->add('contenu',TextType::class)
            ->add('date')
            ->add('statut',TextType::class)
            ->add('idvehicule',EntityType::class,
                    ['class'=>Vehicule::class,
                    'choice_label'=>'idvehicule'])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
