<?php

namespace App\Form;

use App\Entity\NewsLetter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsLetterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('formationsNews', CheckboxType::class,[

            ])
            ->add('immoNews')
            ->add('debitBoissonNews')
            ->add('entrepriseNews')
            ->add('mail')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NewsLetter::class,
        ]);
    }
}
