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
     * @Route("/formation/{nomFormation}", name="formation")
     */
    public function formation(Request $request, string $nomFormation=''): Response
    {

        $contenuFormation = $this->getDoctrine()->getManager()->getRepository(Moduledescription::class);

        return match ($nomFormation) {
            "immobilier" => $this->render('formation/immobilier.html.twig', ['controller_name' => 'FormationController', 'modulesFormation' => $contenuFormation->findBy(array('idrubriqueformation'=> 1))]),
            "permis-dexploitation" => $this->render('formation/permisExploitation.html.twig', ['controller_name' => 'FormationController']),
            "micro-entreprise" => $this->render('formation/microEntreprise.html.twig', ['controller_name' => 'FormationController']),
            "entreprise" => $this->render('formation/entreprise.html.twig', ['controller_name' => 'FormationController']),
            default => $this->render('formation/indexFormation.html.twig', ['controller_name' => 'FormationController']),
        };
    }


    /**
     * @Route("/module/{nomFormation}/{nomModule}", name="module")
     */
    public function module(Request $request, string $nomFormation, string $nomModule): Response
    {


    }



}
