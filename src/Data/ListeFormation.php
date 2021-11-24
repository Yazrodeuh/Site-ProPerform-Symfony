<?php

namespace App\Data;

class ListeFormation
{
    static array $listeFormation = [
        [
            'idFormation' => 1,
            'nomFormation' => 'Immobilier',
            'vignetteFormation' => 'vignetteImmo.png',
            'pathFormation' => 'immobilier',
            'titrePage' => 'Formation des agents immobilier (Loi ALUR)',
            'textEntete' => "<div>
                                <p>
                                    Depuis <strong>la Loi Alur</strong> du 24 mars 2014, <strong>les professionnels de l'immobilier</strong> sont tenus d'une obligation de <strong>formation continue</strong>, dont le respect est vérifié par les CCI (Chambre de Commerce et d'Industrie) à chaque renouvellement de <strong>la carte professionnelle d'agent immobilier</strong> quelle qu'en soit la mention (Carte Transactions sur immeubles et fonds de commerce, Gestion immobilière...).
                                </p>
                                <p>
                                    La durée de formation imposée pour tous les professionnels de l'immobilier est de 14 heures sur une année ou 42 heures au cours de trois années consécutives d'exercice.
                                </p>
                            </div>
                            <div class='ps-4'>
                                <img src='{{ asset(\"img/formation/immobilier/tarif_unique_350.png\") }}' alt='' width='170px' height='170px'>
                            </div>",
            'phraseFormation' => "<strong>Vous pouvez composer votre formation librement selon vos besoins et votre domaine d'activité en choisissant une ou plusieurs thématiques suivantes d'une durée de 7h chacune.</strong>",
            'backgroungImgFormation' => "immo_frise.png",
        ],
        [
            'idFormation' => 2,
            'nomFormation' => 'Permis d\'exploitation',
            'vignetteFormation' => 'vignettePe.png',
            'pathFormation' => 'permisExploitation',
            'titrePage' => 'Le permis d\'exploitation',
            'textEntete' => "<div>
                                <p>
                                    Depuis 2006, la loi impose \"une formation spécifique sur les droits et obligations attachés à l'exploitation d'un débit de boissons (...)\".
                                </p>
                                <p>
                                    Elle donne lieu à la délivrance d'un permis d'exploitation (PE) valable dix années. À l'issue de cette période, la participation à une formation de mise à jour des connaissances permet de prolonger la validité du permis d'exploitation pour une nouvelle période de dix années.
                                </p>
                            </div>",
            'phraseFormation' => "<strong>Nous proposons ainsi 3 formations : le PE Initial, le PE Renouvellement et le PE spécial Chambre d'hôtes.</strong>",
            'backgroungImgFormation' => "pe_frise.png",
        ],
        [
            'idFormation' => 3,
            'nomFormation' => 'Autoentrepreneur',
            'vignetteFormation' => 'vignetteAutoEn.png',
            'pathFormation' => 'autoentrepreneur',
            'titrePage' => 'Devenir autoentrepeneur',
            'textEntete' => "<div>
                                <p class=\"text-center\">
                                    <strong>Vous avez pour projet de créer une micro-entreprise ? Vous êtes déjà installé(e) et rencontrez quelques difficultés ?</strong>
                                </p>
                                <p>
                                    Cette formation complète vous permet de maîtriser les différents statuts envisageables, les obligations administratives, les différentes aides financières, les cotisations sociales et les charges fiscales d'un auto-entrepreneur.
                                </p>
                                <p>
                                    L'ensemble des notions spécifiques et des démarches administratives relatives à la création d'une micro-entreprise n'auront plus de secret pour vous.
                                </p>
                            </div>",
            'phraseFormation' => "<strong>Nous vous proposons ainsi une formule :</strong>",
            'backgroungImgFormation' => "me_frise.png",
        ],
        [
            'idFormation' => 4,
            'nomFormation' => 'Entreprise',
            'vignetteFormation' => 'vignetteEntre.png',
            'pathFormation' => 'entreprise',
            'titrePage' => 'Créer son entreprise',
            'textEntete' => "<div>
                                <p class=\"text-center\">
                                    <strong>Vous avez pour projet de créer ou reprendre une entreprise ?</strong>
                                </p>
                                <p>
                                    Nos formations personnalisées sont adaptées à vos projets pour vous permettre d’assimiler toutes les informations administratives, juridiques et financières nécessaires à la création ou à la reprise d’une entreprise .
                                </p>
                            </div>",
            'phraseFormation' => "<strong>Nous vous proposons ainsi quatre formules :</strong>",
            'backgroungImgFormation' => "enntreprise_frise.png",
        ],
    ];

}