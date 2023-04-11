<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\LoginType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class LoginController extends AbstractController
{
    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    #[Route('/login', name: 'app_login')]
    public function login(Request $request,UserPasswordHasherInterface $passwordHasher): Response
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
            $plainPassword = $user->getPwd();

            // Récupérer l'utilisateur à partir de l'email
            $userRepository = $this->getDoctrine()->getRepository(Utilisateur::class);
            $utilisateur = $userRepository->findOneBy(['email' => $email]);

            // Vérifier que l'utilisateur existe et que le mot de passe est correct
            if (!$utilisateur || !$passwordHasher->isPasswordValid($utilisateur, $plainPassword)) {
                // Les informations de connexion sont invalides
                throw $this->createNotFoundException('Email ou mot de passe incorrect');
            }

            // Le mot de passe est correct, l'utilisateur est authentifié
            $token = new UsernamePasswordToken($utilisateur, null, 'main', $utilisateur->getRoles());
            $this->get('security.token_storage')->setToken($token);

            // Rediriger l'utilisateur vers une autre page
            return $this->redirectToRoute('app_home');
        }

        // Afficher le formulaire
        return $this->render('login/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function getUserAuthentication(Utilisateur $user)
    {
        // Connexion de l'utilisateur
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.token_storage')->setToken($token);
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
