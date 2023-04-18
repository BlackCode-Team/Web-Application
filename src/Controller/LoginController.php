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

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class LoginController extends AbstractController
{
    private $managerRegistry;
    private $session;

    public function __construct(ManagerRegistry $managerRegistry, SessionInterface $session)
    {
        $this->managerRegistry = $managerRegistry;
        $this->session = $session;
    }

    #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        // Créer une instance de l'entité Utilisateur
        $user = new Utilisateur();

        // Créer le formulaire à partir de la classe LoginType
        $form = $this->createForm(LoginType::class, $user);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $this->addFlash('success', 'Votre message a été envoyé avec succès.');

            
            // Le formulaire est valide, faire quelque chose avec les données
            $email = $user->getEmail();
            $plainPassword = $user->getPwd();

            // Récupérer l'utilisateur à partir de l'email
            $userRepository = $this->managerRegistry->getManager()->getRepository(Utilisateur::class);
            $utilisateur = $userRepository->findOneBy(['email' => $email]);

            // Vérifier que l'utilisateur existe et que le mot de passe est correct
            if (!$utilisateur || !$passwordHasher->isPasswordValid($utilisateur, $plainPassword)) {
                // Les informations de connexion sont invalides
                throw $this->createNotFoundException('Email ou mot de passe incorrect');
            }

            // Le mot de passe est correct, l'utilisateur est authentifié
            $token = new UsernamePasswordToken($utilisateur, null, 'main', $utilisateur->getRoles());
            $this->session->set('user_id', $utilisateur->getId());

            // Créer une session pour l'utilisateur
            $this->session->set('user_id', $utilisateur->getId());

            // Rediriger l'utilisateur vers une autre page
            return $this->redirectToRoute('app_home');
        }
       
        // Afficher le formulaire
        return $this->render('login/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Vérifier si l'utilisateur est authentifié
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer l'id de l'utilisateur depuis la session
        $userId = $this->session->get('user_id');

        // Récupérer l'utilisateur à partir de l'id
        $userRepository = $this->managerRegistry->getManager()->getRepository(Utilisateur::class);
        $utilisateur = $userRepository->find($userId);

        return $this->render('base.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
}