<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Repository\EntreRepository;
use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="entre_eleve")
     */
    public function entre(EntreRepository $entreRepository): Response
    {

        return $this->render('eleve/entre.html.twig', [
            'entres' => $entreRepository->findAll(),
        ]);
    }
    /**
     * @Route("/eleve/{id}", name="eleve_show_liste")
     */

    public function show_liste(EntreRepository $entreRepository,Eleve $eleve, SortieRepository $sortieRepository): Response
    {


        return $this->render('eleve/show_liste.html.twig', [
            'entres' => $entreRepository->findBy(["eleve"=>$eleve->getId()]),
            'sorties' => $sortieRepository->findBY(["eleve"=>$eleve->getID()]),
            'eleve' => $eleve,
        ]);
    }

    /**
     * @Route("/sortie", name="sortie_eleve")
     */
    public function sortie(SortieRepository $sortieRepository): Response
    {

        return $this->render('eleve/sortie.html.twig', [
            'sorties' => $sortieRepository->findAll(),
        ]);
    }
}
