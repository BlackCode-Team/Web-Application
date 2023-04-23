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
{   private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        // Créer une instance de l'entité User
        $user = new Utilisateur();

        // Créer le formulaire à partir de la classe LoginType
        $form = $this->createForm(LoginType::class, $user);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Le formulaire est valide, faire quelque chose avec les données
            $email = $user->getEmail();
            $plainPassword = $user->getPwd();

            // Vérifier que l'utilisateur existe et que le mot de passe est correct
            if ($email !== 'user@example.com' || !$passwordHasher->isPasswordValid($user, $plainPassword)) {
                // Les informations de connexion sont invalides
                $this->addFlash('error', 'Email ou mot de passe incorrect');
                return $this->redirectToRoute('app_login');
            }

            // Le mot de passe est correct, l'utilisateur est authentifié
            $token = new UsernamePasswordToken($user, null, 'main', $user->getRole());

            // Créer une session pour l'utilisateur
            $this->session->set('user_id', $user->getIduser());

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
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->find($userId);

        return $this->render('base.html.twig', [
            'user' => $user,
        ]);
    }
    }
