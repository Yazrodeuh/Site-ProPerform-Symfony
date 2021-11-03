<?php

namespace App\DataFixtures;

use App\Data\ListeModule;
use App\Entity\Module;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ModeleFixture extends Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {

        foreach (ListeModule::$listeModule as $mesModules){

            $modules = new Module();

            $modules->setIdModule($mesModules['idModule']);
            $modules->setNomModule($mesModules['nomModule']);
            $modules->setAliasModule($mesModules['aliasModule']);
            $modules->setDureeModule($mesModules['dureeModule']);
            $modules->setPourQuiModule($mesModules['pourQuiModule']);
            $modules->setObjectifModule($mesModules['objectifModule']);
            $modules->setOrganisationPedagoModule($mesModules['organisationPedagoModule']);
            $modules->setPrixModule($mesModules['prixModule']);
            $modules->setTarifInfoModule($mesModules['tarifInfoModule']);
            $modules->setLieuModule($mesModules['lieuModule']);
            $modules->setLieuDetailsModule($mesModules['lieuDetailModule']);
            $modules->setNomLienModule($mesModules['nomLienModule']);
            $modules->setPrerequisModule($mesModules['prerequisModule']);
            $modules->setPublicModule($mesModules['publicModule']);
            $modules->setDelaisModule($mesModules['delaisModule']);
            $modules->setObjectifPedagoModule($mesModules['objectifPedagoModule']);
            $modules->setModaliteModule($mesModules['modaliteModule']);
            $modules->setProgrammeModule($mesModules['programmeModule']);
            $modules->setValeurModule($mesModules['valeurModule']);
            $modules->setVersionModule($mesModules['versionModule']);
            $modules->setCouleurModule($mesModules['couleurModule']);
            $modules->setIdFormation($mesModules['idFormation']);

            $manager->persist($modules);

        }

        $manager->flush();

    }
}