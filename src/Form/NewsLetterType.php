<?php

namespace App\Form;

use App\Entity\NewsLetter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsLetterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('formationsNews', CheckboxType::class,[
                'label'=>'Formations'
            ])
            ->add('immoNews', CheckboxType::class,[
                'label'=>'Immobilier'
            ])
            ->add('debitBoissonNews', CheckboxType::class,[
                'label'=>'Débit de boissons'
            ])
            ->add('entrepriseNews', CheckboxType::class,[
                'label'=>'Création d\'entreprise'
            ])
            ->add('mail', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Mail',
                    /*'pattern' => '[A-Za-z\-]+',*/
                    'title' => 'exemple@exemple.com'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NewsLetter::class,
        ]);
    }
}
