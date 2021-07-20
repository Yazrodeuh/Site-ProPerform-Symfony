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

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenomC', TextType::class, [
                'label'=>false,
                'attr' => [
                    'placeholder' => 'Prénom*',
                    'pattern' => '[A-Za-z\-]+',
                    'title' => 'Lettres majuscules et minuscules et la caractère " - "'
                ]])
            ->add('nomC', TextType::class, [
                'label'=>false,
                'attr' => [
                    'placeholder' => 'Nom*',
                    'pattern' => '[A-Za-z\-]+',
                    'title' => 'Lettres majuscules et minuscules et la caractère " - "'
                ]])
            ->add('mailC', EmailType::class, [
                'label'=>false,
                'attr' => [
                    'placeholder' => 'Mail*',
                    /*'pattern' => '[A-Za-z\-]+',*/
                    'title' => 'exemple@exemple.com'
                ]])
            ->add('optionC', ChoiceType::class, [
                'choices' =>[
                    'choix' => '',
                    'Immobilier' => [
                        'Transaction' => 'Immobilier_Transaction',
                        'Gestion locative' => 'Immobilier_Gestion_locative',
                        'Déontologie, Discrimination' => 'Immobilier_Déontologie,_Discrimination',
                        'Actualités juridiques, Transaction' => 'Immobilier_Actualités_juridiques,_Transaction',
                        'Actualités juridiques, Gestion locative' => 'Immobilier_Actualités_juridiques,_Gestion_locative',
                        'RGPD, TRACFIN'=>'Immobilier_RGPD,_TRACFIN',
                        'Autre'=>'Immobilier_Autre'
                    ],
                    'Permis d\'exploitation' => [
                        'Initial' => 'Permis_d\'exploitation_initial',
                        'Renouvellement' => 'Permis_d\'exploitation_renouvellement',
                        'Chambre d\'hôtes' => 'Permis_d\'exploitation_chambre_d\'hôtes',
                        'Autre'=>'Permis_d\'exploitation_Autre'
                    ],
                    'Micro-entreprise' => [
                        'Créer sa micro-entreprise ACCOMPAGNE' => 'Micro-entreprise_Créer_sa_micro-entreprise_ACCOMPAGNE',
                        'Autre' => 'Micro-entreprise_Autre'
                    ],
                    'Entreprise' => [
                        '' => ''
                    ],
                    'Autre' => [
                        'Autre' => 'Autre'
                    ]
                ],
                'label'=>false,
                'choice_attr' => [
                    'choix' => ['value' => false]
                ]
            ])
            ->add('objetC', TextType::class, [
                'label'=>false,
                'attr' => [
                    'placeholder' => 'Objet*',
                    'title' => 'Objet de la demande de contact'
                ]])
            ->add('messageC', TextareaType::class, [
                'label'=>false,
                'attr' => [
                    'placeholder' => 'Saisissez vore message ici'
                ]])
            ->add('copieC', CheckboxType::class, [ 'label'=>'Souhaitez-vous recevoir une copie de votre message ?',])
            ->add('cgvC', CheckboxType::class, ['label' => 'En soumettant ce formulaire, "j’accepte que les informations saisies soient exploitées dans le cadre de la présente demande et de la relation commerciale qui puisse en découler". Pour connaitre et exercer vos droits, notamment de retrait de votre consentement à l’utilisation des données collectées par ce formulaire, veuillez consulter <a href=""> <u>notre politique générale sur la protection des données personnelles</u></a>.'])
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
