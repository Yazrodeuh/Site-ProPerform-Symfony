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


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request): Response
    {

        $formInscrit = $this->createForm(ContactType::class);

        $formInscrit->handleRequest($request);

        if($request->isMethod('post') && $formInscrit->isValid() ){

            $em = $this->getDoctrine()->getManager();

            $prenom = $formInscrit['prenomC']->getData();
            $nom = $formInscrit['nomC']->getData();
            $mail = $formInscrit['mailC']->getData();
            $formation = $formInscrit['optionC']->getData();
            $objet = $formInscrit['objetC']->getData();
            $message = $formInscrit['messageC']->getData();

            if(mail("contact@pro-perform.fr", )){

            }

            $session = $request->getSession();
            $session->getFlashBag()->add('message', 'un nouveau produit a été ajouté');
            $session->set('statut', 'success');
            print $formInscrit['prenominscrit']->getData();
            return new JsonResponse($request->request->all());
        }



        /*if($request->isMethod('post')){

            return new JsonResponse($request->request->all());
        }*/

        return $this->render('utilisateur/formulaire.html.twig', ['controller_name' => 'UtilisateurController', 'my_form'=>$formInscrit->createView()]);
    }


}
