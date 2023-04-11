<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Utilisateur;
use App\Form\LoginType;



class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request): Response
    {
        // Créer une instance de l'entité Utilisateur
        $user = new Utilisateur();

        // Créer le formulaire à partir de la classe LoginType
        $form = $this->createForm(LoginType::class, $user);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Le formulaire est valide, faire quelque chose avec les données
            $email = $user->getEmail();
            $password = $user->getPwd();

            // Faire quelque chose avec les données...

            // Rediriger l'utilisateur vers une autre page
            return $this->redirectToRoute('app_utilisateur');
        }

        // Afficher le formulaire
        return $this->render('login/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function index(): Response
    {
        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
