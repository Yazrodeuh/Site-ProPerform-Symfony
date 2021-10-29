<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
                'attr' => [
                    'placeholder' => 'Prénom*',
                    'pattern' => '[A-Za-z\-]+',
                    'title' => 'Lettres majuscules et minuscules et le caractère " - "',
                    'class' => 'input'
                ]])
            ->add('nomC', TextType::class, [
                'required'=> true,
                'attr' => [
                    'placeholder' => 'Nom*',
                    'pattern' => '[A-Za-z\-]+',
                    'title' => 'Lettres majuscules et minuscules et la caractère " - "',
                    'class' => 'input'
                ]])
            ->add('mailC', EmailType::class, [
                'required'=> true,
                'attr' => [
                    'placeholder' => 'Mail*',
                    /*'pattern' => '[A-Za-z\-]+',*/
                    'title' => 'exemple@exemple.com',
                    'class' => 'input'
                ]])
            ->add('optionC', ChoiceType::class, [
                'required'=> true,
                'choices' =>[
                    'Formation immobilier' => 'Formation immobilier',
                    'Formation permis d\'exploitation' => 'Formation permis d\'exploitation',
                    'Formation autoentrepreneur'=>'Formation autoentrepreneur',
                    'Formation entreprise'=>'Formation entreprise',
                    'Autre' => 'autre',
                ],
                'placeholder' => '-Sélectionner-',
                'attr' => [
                    'class' => 'select'
                ]
            ])
            ->add('objetC', TextType::class, [
                'required'=> true,
                'attr' => [
                    'placeholder' => 'Objet*',
                    'title' => 'Objet de la demande de contact',
                    'class' => 'input'
                ]])
            ->add('messageC', TextareaType::class, [
                'required'=> true,
                'attr' => [
                    'placeholder' => 'Saisissez vore message ici',
                    'class' => 'textarea'
                ]])
            ->add('copieC', CheckboxType::class, [ 'label'=>'Souhaitez-vous recevoir une copie de votre message ?',])
            ->add('cgvC', CheckboxType::class, [
                'required'=> true,
                'label' => "En soumettant ce formulaire, \"j’accepte que les informations saisies soient exploitées dans le cadre de la présente demande et de la relation commerciale qui puisse en découler\". Pour connaitre et exercer vos droits, notamment de retrait de votre consentement à l’utilisation des données collectées par ce formulaire, veuillez consulter <a href=\"\"> <u>notre politique générale sur la protection des données personnelles</u></a>.",
                'label_html' => true
            ])
            ->add('envoyerC', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'button'
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
