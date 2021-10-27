<?php

namespace App\Controller;

use App\Entity\Inscrit;
use App\Form\ContactType;
use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends DefaultController
{
    #[Route('/utilisateur', name: 'utilisateur')]
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }

    /**
     * @Route("/test-form", name="testForm")
     */
    public function testForm(Request $request): Response
    {
        $formContact = $this->createForm(ContactType::class);

        $formContact->handleRequest($request);

        if($request->isMethod('post') && $formContact->isValid() ){

        }



        return $this->render('utilisateur/contact.html.twig', ['controller_name' => 'UtilisateurController']);
    }





}
