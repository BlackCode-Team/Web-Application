<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;
use App\Form\RegisterType;


class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    
    public function register(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        // Créer une instance de l'entité Utilisateur
        $user = new Utilisateur();

        // Créer le formulaire à partir de la classe RegisterType
        $form = $this->createForm(RegisterType::class, $user);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Le formulaire est valide, faire quelque chose avec les données
            $utilisateurRepository->save($user, true);

            // Rediriger l'utilisateur vers une autre page
            return $this->redirectToRoute('accueil', [], Response::HTTP_SEE_OTHER);
        }

        // Afficher le formulaire
        return $this->render('register/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function index(): Response
    {
        return $this->render('register/register.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }
}
