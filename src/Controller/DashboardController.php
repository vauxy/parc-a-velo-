<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="entre_eleve")
     */
    public function entre(): Response
    {

        return $this->render('eleve/entre.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
