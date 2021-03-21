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

        return $this->render('eleves/entre.html.twig', [
            'entres' => $entreRepository->findBy(["refus"=>false]),
        ]);
    }
    /**
     * @Route("/eleves/{id}", name="eleve_show_liste")
     */

    public function show_liste(EntreRepository $entreRepository,Eleve $eleve, SortieRepository $sortieRepository): Response
    {


        return $this->render('eleves/show_liste.html.twig', [
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

        return $this->render('eleves/sortie.html.twig', [
            'sorties' => $sortieRepository->findBy(["refus"=>false]),
        ]);
    }
    /**
     * @Route("/refus", name="refus_eleve")
     */
    public function refus(SortieRepository $sortieRepository, EntreRepository $entreRepository): Response
    {

        return $this->render('eleves/refus.html.twig',[
            'sortiesRefus' => $sortieRepository->findBy(["refus"=>true]),
            'entreRefus' => $entreRepository->findBy(["refus"=>true]),

        ]);
    }



}
