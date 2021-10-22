<?php

namespace App\DataFixtures;

use App\Data\ListeModuleDescription;
use App\Entity\ModuleDescription;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ModeleDescriptionFixture extends Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        foreach (ListeModuleDescription::$mesModulesDescriptions as $mesModulesDescription) {

            $modulesDescription = new ModuleDescription();

            $modulesDescription->setCategorieModuleDesc($mesModulesDescription['categorieModuleDesc']);
            $modulesDescription->setNomModuleDesc($mesModulesDescription['nomModuleDesc']);
            $modulesDescription->setAliasModuleDesc($mesModulesDescription['aliasModuleDesc']);
            $modulesDescription->setDureeModuleDesc($mesModulesDescription['dureeModuleDesc']);
            $modulesDescription->setPourQuiModuleDesc($mesModulesDescription['pourQuiModuleDesc']);
            $modulesDescription->setObjectifsModuleDesc($mesModulesDescription['objectifsModuleDesc']);
            $modulesDescription->setOrgaPedagoModuleDesc($mesModulesDescription['orgaPedagoModuleDesc']);
            $modulesDescription->setPrixModuleDesc($mesModulesDescription['prixModuleDesc']);
            $modulesDescription->setLieuModuleDesc($mesModulesDescription['lieuModuleDesc']);
            $modulesDescription->setLienModuleDesc($mesModulesDescription['lienModuleDesc']);
            $modulesDescription->setIdRubriqueFormation($mesModulesDescription['idRubriqueFormation']);

            $manager->persist($modulesDescription);
        }

        $manager->flush();
    }
}