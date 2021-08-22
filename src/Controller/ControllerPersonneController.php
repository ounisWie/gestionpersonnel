<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerPersonneController extends AbstractController
{
    /**
     * @Route("/controller/personne", name="controller_personne")
     */
    public function index(): Response
    {
        return $this->render('controller_personne/index.html.twig', [
            'controller_name' => 'ControllerPersonneController',
        ]);
    }
}
