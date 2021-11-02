<?php

namespace App\Controller;

use App\Entity\Module;
use App\Entity\Modulecomplet;
use App\Entity\ModuleDescription;
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
     * @Route("/immobilier/{nomModule}", name="immobilier")
     * @param string|null $nomModule
     * @return Response
     */
    public function immobilier(string $nomModule = null): Response
    {
        $contenuFormation = $this->getDoctrine()->getManager()->getRepository(Module::class);

        if($nomModule != null){
            return $this->render('formation/moduleComplet.html.twig', ['moduleFormation' => $contenuFormation->findBy(array('nomLienModule'=> $nomModule))[0]]);
        }else{
            return $this->render('formation/immobilier.html.twig', ['modulesFormation' => $contenuFormation->findBy(array('idFormation'=> 1))]);
        }
    }

    /**
     * @Route("/permis-dexploitation/{nomModule}", name="permisExploitation")
     * @param string|null $nomModule
     * @return Response
     */
    public function permisExploitation(string $nomModule = null): Response
    {
        $contenuFormation = $this->getDoctrine()->getManager()->getRepository(Module::class);

        if($nomModule != null){
            return $this->render('formation/moduleComplet.html.twig', ['moduleFormation' => $contenuFormation->findBy(array('nomLienModule'=> $nomModule))[0]]);
        }else {
            return $this->render('formation/permisExploitation.html.twig', ['modulesFormation' => $contenuFormation->findBy(array('idFormation' => 2))]);
        }
    }

    /**
     * @Route("/devenir-autoentrepreneur/{nomModule}", name="autoentrepreneur")
     * @param string|null $nomModule
     * @return Response
     */
    public function autoentrepreneur(string $nomModule = null): Response
    {
        $contenuFormation = $this->getDoctrine()->getManager()->getRepository(Module::class);

        if($nomModule != null){
            return $this->render('formation/moduleComplet.html.twig', ['moduleFormation' => $contenuFormation->findBy(array('nomLienModule'=> $nomModule))[0]]);
        }else {
            return $this->render('formation/microEntreprise.html.twig', ['modulesFormation' => $contenuFormation->findBy(array('idFormation' => 3))]);
        }
    }

    /**
     * @Route("/creer-son-entreprise/{nomModule}", name="entreprise")
     * @param string|null $nomModule
     * @return Response
     */
    public function entreprise(string $nomModule = null): Response
    {
        $contenuFormation = $this->getDoctrine()->getManager()->getRepository(Module::class);

        if($nomModule != null){
            return $this->render('formation/moduleComplet.html.twig', ['moduleFormation' => $contenuFormation->findBy(array('nomLienModule'=> $nomModule))[0]]);
        }else {
            return $this->render('formation/entreprise.html.twig', ['modulesFormation' => $contenuFormation->findBy(array('idFormation' => 4))]);
        }
    }


}
