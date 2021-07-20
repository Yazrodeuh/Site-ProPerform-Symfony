<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends DefaultController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function equipe(): Response
    {
        return $this->render('entreprise/equipe.html.twig', ['controller_name' => 'EntrepriseController']);
    }

    /**
     * @Route("/locaux/{ville}", name="locaux")
     */
    public function locaux(Request $request, string $ville): Response
    {
        if($ville == "montpellier"){
            return $this->render('entreprise/montpellier.html.twig', ['controller_name' => 'EntrepriseController']);
        }elseif ($ville == "nimes"){
            return $this->render('entreprise/nimes.html.twig', ['controller_name' => 'EntrepriseController']);
        }else{
            return $this->render('entreprise/nimes.html.twig', ['controller_name' => 'EntrepriseController']);
        }

    }

    /**
     * @Route("/conditions-generales-de-vente", name="cgv")
     */
    public function cgv(): Response
    {
        return $this->render('entreprise/cgv.html.twig', ['controller_name' => 'EntrepriseController']);
    }

    /**
     * @Route("/mentions-legales", name="mentionLegales")
     */
    public function mentionLegales(): Response
    {
        return $this->render('entreprise/mentionLegales.html.twig', ['controller_name' => 'EntrepriseController']);
    }


}
