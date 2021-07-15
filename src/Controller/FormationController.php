<?php

namespace App\Controller;

use App\Entity\Modulecomplet;
use App\Entity\Moduledescription;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    /**
     * @Route("/formations/{nomFormation}", name="formation")
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
     * @Route("/formations/{nomFormation}/{nomModule}", name="module")
     */
    public function module(Request $request, string $nomFormation, string $nomModule): Response
    {

        $module = $this->getDoctrine()->getManager()->getRepository(Modulecomplet::class);

        if($nomFormation == "immobilier"){
            if($nomModule == "bases-juridiques-transaction"){
                return $this->render('formation/module.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(1)]);
            }elseif ($nomModule == "bases-juridiques-gestion-locative"){
                return $this->render('formation/module.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(2)]);
            }elseif ($nomModule == "deontologie-discrimination"){
                return $this->render('formation/module.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(3)]);
            }elseif ($nomModule == "actualites-juridiques-transaction"){
                return $this->render('formation/module.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(4)]);
            }elseif ($nomModule == "actualites-juridiques-gestion-locative"){
                return $this->render('formation/module.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(5)]);
            }elseif ($nomModule == "rgpd-tracfin"){
                return $this->render('formation/module.html.twig', ['controller_name' => 'FormationController', 'moduleFormation' => $module->find(6)]);
            }
        }elseif ($nomFormation == "permis-dexploitation"){

        }elseif ($nomFormation == "micro-entreprise"){

        }elseif ($nomFormation == "entreprise"){

        }

    }



}
