<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BadgeRepository;


class BadgesController extends AbstractController
{
    #[Route('/badges', name: 'app_badges')]
    public function index(): Response
    {
        return $this->render('badges/index.html.twig', [
            'controller_name' => 'BadgesController',
        ]);
    }

    #[Route('/AfficherBadge',name:'Aff')]
    function Affiche(BadgeRepository $repo){
       $badge=$repo->findAll();
        return $this->render('badges/AfficherBadge.html.twig',['cc'=>$badge]);
    }
}
