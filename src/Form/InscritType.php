<?php

namespace App\Form;

use App\Entity\Inscrit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscritType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenominscrit')
            ->add('nominscrit')
            ->add('mailinscrit')
            ->add('telinscrit')
            ->add('nomformation')
            ->add('datetotinscrit')
            ->add('datetardinscrit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inscrit::class,
        ]);
    }
}
