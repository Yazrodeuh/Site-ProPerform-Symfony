<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            return $this->render('entreprise/montpellier.html.twig', []);
        }elseif ($ville == "nimes"){
            return $this->render('entreprise/nimes.html.twig', []);
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


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request): Response
    {

        $formInscrit = $this->createForm(ContactType::class);

        $formInscrit->handleRequest($request);

        if($request->isMethod('post') && $formInscrit->isValid()){
            var_dump($formInscrit->getData());







            $session = $request->getSession();
            $session->getFlashBag()->add('message', 'Votre demande de contact à bien été prise en compte !');
            $session->set('statut', 'success');

        }

        //var_dump($formInscrit->getData());

        /*if($request->isMethod('post') && $formInscrit->isValid() ){

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
        }*/



        /*if($request->isMethod('post')){

            return new JsonResponse($request->request->all());
        }*/

        return $this->render('entreprise/contact.html.twig', ['', 'my_form'=>$formInscrit->createView()]);
    }


}
