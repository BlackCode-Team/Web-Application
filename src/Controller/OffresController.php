<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffreRepository;

class OffresController extends AbstractController
{
    #[Route('/offres', name: 'app_offres')]
    public function index(): Response
    {
        return $this->render('offres/index.html.twig', [
            'controller_name' => 'OffresController',
        ]);
    }
    #[Route('/AfficherOffre',name:'Affi')]
    function Affiche(OffreRepository $repo){
       $badge=$repo->findAll();
        return $this->render('offres/AfficherOffre.html.twig',['cc'=>$badge]);
    }
}
