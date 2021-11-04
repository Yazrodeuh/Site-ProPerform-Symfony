<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\User;
use App\Form\NewsLetterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends DefaultController
{
    /**
     * @Route("/actualites", name="actualites")
     */
    public function actualites(Request $request): Response
    {

        $actualites = $this->getDoctrine()->getManager()->getRepository(Actualite::class)->allActualites();
        //TODO à finir


        $news = $this->createForm(NewsLetterType::class);
        $news->handleRequest($request);


        return $this->render('actualite/actualites.html.twig', [
            'actus' => $actualites, 'form' => $news->createView()
        ]);
    }

    /**
     * @Route("/actualites/{nomActu}", name="actualite")
     */
    public function actualite(Request $request): Response
    {

        $news = $this->createForm(NewsLetterType::class);
        $news->handleRequest($request);

        return $this->render('actualite/index.html.twig', [
            'form' => $news->createView()
        ]);
    }


    private function getUrlImage($numActu): ?string
    {
        $url = $_SERVER['DOCUMENT_ROOT'] . 'actus' . DIRECTORY_SEPARATOR . 'actu' . $numActu . DIRECTORY_SEPARATOR;
        $image = null;
        foreach (scandir($url) as $value){
            if(is_file($url . $value) && exif_imagetype($url . $value) != false){
                $image = $url . $value;
            }

        }
        return $image;
    }





}
