<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/home', name: 'app_homepage', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}
