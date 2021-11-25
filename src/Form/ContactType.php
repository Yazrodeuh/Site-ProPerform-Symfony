<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Symfony\Component\Translation\t;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenomC', TextType::class, [
                'required'=> true,
                'label' => 'Prénom*',
                 'label_attr' => [
                     'class' => 'form-label'
                 ],
                 'attr' => [
                    'placeholder' => 'Prénom*',
                    /*'pattern' => '[A-Za-z\-]+',*/
                    'class' => 'form-control'
                ]])
            ->add('nomC', TextType::class, [
                'required'=> true,
                'label' => 'Nom*',
                'attr' => [
                    'placeholder' => 'Nom*',
                    /*'pattern' => '[A-Za-z\-]+',*/
                    'class' => 'form-control'
                ]])
            ->add('mailC', EmailType::class, [
                'required'=> true,
                'label' => 'E-mail*',
                'attr' => [
                    'placeholder' => 'E-mail*',
                    'title' => 'exemple@exemple.com',
                    'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$',
                    'class' => 'form-control'
                ]])
            ->add('telC', TelType::class, [
                'required'=> false,
                'label' => 'Téléphone',
                'attr' => [
                    'placeholder' => 'Téléphone',
                    /*'pattern' => '[A-Za-z\-]+',*/
                    'class' => 'form-control',
                    'value' => null
                ]])
            ->add('optionC', ChoiceType::class, [
                'required'=> true,
                'label' => 'Objet de la demande de contact*',
                'choices' =>[
                    'Formation immobilier' => 'Formation immobilier',
                    'Formation permis d\'exploitation' => 'Formation permis d\'exploitation',
                    'Formation autoentrepreneur'=>'Formation autoentrepreneur',
                    'Formation entreprise'=>'Formation entreprise',
                    'Autre' => 'autre',
                ],
                'placeholder' => '-Sélectionner-',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('messageC', TextareaType::class, [
                'required'=> true,
                'label' => 'Votre message',
                'attr' => [
                    'placeholder' => 'Saisissez vore message ici',
                    'class' => 'form-control',
                    'style' => 'min-height: 10rem'
                ]])
            ->add('copieC', CheckboxType::class, [
                'required' => false,
                'label'=>'Souhaitez-vous recevoir une copie de votre message ?',
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'attr' => [
                    'class' => 'form-check-input',
                ]
            ])
            ->add('cgvC', CheckboxType::class, [
                'required'=> true,
                'label' => "En soumettant ce formulaire, \"j’accepte que les informations saisies soient exploitées dans le cadre de la présente demande et de la relation commerciale qui puisse en découler\". Pour connaitre et exercer vos droits, notamment de retrait de votre consentement à l’utilisation des données collectées par ce formulaire, veuillez consulter <a href=\"\"> <u>notre politique générale sur la protection des données personnelles</u></a>.",
                'label_html' => true,
                'label_attr' => [
                    'class' => 'form-check-label text-justify'
                ],
                'attr' => [
                    'class' => 'form-check-input',
                ]
            ])
            ->add('envoyerC', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
