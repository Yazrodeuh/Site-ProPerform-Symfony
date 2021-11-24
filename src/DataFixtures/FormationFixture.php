<?php

namespace App\DataFixtures;

use App\Data\ListeFormation;
use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormationFixture extends Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {

        foreach (ListeFormation::$listeFormation as $value){

            $formation = new Formation();

            $formation->setId($value['idFormation']);
            $formation->setNomFormation($value['nomFormation']);
            $formation->setVignetteFormation($value['vignetteFormation']);
            $formation->setPathFormation($value['pathFormation']);
            $formation->setTitrePage($value['titrePage']);
            $formation->setTextEntete($value['textEntete']);
            $formation->setPhraseFormation($value['phraseFormation']);
            $formation->setBackgroundImgFormation($value['backgroungImgFormation']);
            $formation->setColorFormation($value['colorFormation']);

            $manager->persist($formation);
        }

        $manager->flush();

    }
}