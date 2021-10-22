<?php

namespace App\Controller;

use App\Entity\ModuleDescription;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [ 'controller_name' => 'DefaultController' ]);
    }

    /*protected function render(string $view, array $parameters = [], Response $response = null): Response
    {
        $headerTab = [
            'headerModulesImmo' => $this->getDoctrine()->getManager()->getRepository(ModuleDescription::class)->findBy(array('idrubriqueformation'=> 1)),
            'headerModulesPe' => $this->getDoctrine()->getManager()->getRepository(ModuleDescription::class)->findBy(array('idrubriqueformation'=> 2)),
            'headerModulesMe' => $this->getDoctrine()->getManager()->getRepository(ModuleDescription::class)->findBy(array('idrubriqueformation'=> 3)),
            'headerModulesE' => $this->getDoctrine()->getManager()->getRepository(ModuleDescription::class)->findBy(array('idrubriqueformation'=> 4))
        ];

        return parent::render($view, array_merge($headerTab, $parameters), $response); // TODO: Change the autogenerated stub
    }*/
}
