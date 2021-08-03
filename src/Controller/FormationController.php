<?php

namespace App\Controller;

use App\Entity\Modulecomplet;
use App\Entity\Moduledescription;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class FormationController
 * @package App\Controller
 * @Route ("/formations")
 */
class FormationController extends DefaultController
{
    /**
     * @Route("/{nomFormation}", name="formation")
     */
    public function formation(Request $request, string $nomFormation=''): Response
    {

        $contenuFormation = $this->getDoctrine()->getManager()->getRepository(Moduledescription::class);

        return match ($nomFormation) {
            "immobilier" => $this->render('formation/immobilier.html.twig', ['controller_name' => 'FormationController', 'modulesFormation' => $contenuFormation->findBy(array('idrubriqueformation'=> 1))]),
            "permis-dexploitation" => $this->render('formation/permisExploitation.html.twig', ['controller_name' => 'FormationController', 'modulesFormation' => $contenuFormation->findBy(array('idrubriqueformation'=> 2))]),
            "micro-entreprise" => $this->render('formation/microEntreprise.html.twig', ['controller_name' => 'FormationController', 'modulesFormation' => $contenuFormation->findBy(array('idrubriqueformation'=> 3))]),
            "entreprise" => $this->render('formation/entreprise.html.twig', ['controller_name' => 'FormationController', 'modulesFormation' => $contenuFormation->findBy(array('idrubriqueformation'=> 4))]),
            default => $this->render('formation/indexFormation.html.twig', ['controller_name' => 'FormationController']),
        };
    }


    /**
     * @Route("/{nomFormation}/{nomModule}", name="module")
     */
    public function module(Request $request, string $nomFormation, string $nomModule): Response
    {

        $module = $this->getDoctrine()->getManager()->getRepository(Modulecomplet::class);

        if($nomFormation == "immobilier"){
            switch ($nomModule){
                case "bases-juridiques-transaction":
                    return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(1)]);
                case "bases-juridiques-gestion-locative":
                    return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(2)]);
                case "deontologie-discrimination":
                    return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(3)]);
                case "actualites-juridiques-transaction":
                    return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(4)]);
                case "actualites-juridiques-gestion-locative":
                    return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(5)]);
                case "rgpd-tracfin":
                    return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(6)]);
            }
        }elseif ($nomFormation == "permis-dexploitation"){
            if($nomModule == "initial"){
                return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(7)]);
            }elseif ($nomModule == "renouvellement"){
                return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(8)]);
            }elseif ($nomModule == "chambres-dhotes"){
                return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(9)]);
            }
        }elseif ($nomFormation == "micro-entreprise"){
            if($nomModule == "accompagne"){
                return $this->render('formation/moduleComplet.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(10)]);
            }
        }elseif ($nomFormation == "entreprise") {

        }

        return $this->render('');

    }



}
