<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends DefaultController
{
    /**
     * @Route("/actualites", name="actualites")
     */
    public function actualites(): Response
    {

        $actualites = $this->getDoctrine()->getManager()->getRepository(Actualite::class)->findAll();
        //TODO à finir

        return $this->render('actualite/actualites.html.twig', [
            'actus' => $actualites,
        ]);
    }

    /**
     * @Route("/actualites/{nomActu}", name="actualite")
     */
    public function actualite(): Response
    {
        return $this->render('actualite/index.html.twig', [
            'controller_name' => 'ActualiteController',
        ]);
    }
}
