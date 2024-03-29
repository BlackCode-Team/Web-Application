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
use App\Repository\UtilisateurRepository;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authUtils, UtilisateurRepository $UtilisateurRepository): Response
{
    // Récupérer les erreurs de login s'il y en a
    $error = $authUtils->getLastAuthenticationError();
    
    // Récupérer le dernier email entré par l'utilisateur
    $lastEmail = $authUtils->getLastUsername();

    // Créer le formulaire de login
    $form = $this->createForm(LoginType::class);

    // Vérifier si le formulaire a été soumis
    $form->handleRequest($request);

    // Vérifier si le formulaire est valide et les données soumises existent dans la base de données
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $user = $UtilisateurRepository->findOneBy(['email' => $lastEmail]);

        // Vérifier si l'utilisateur existe dans la base de données et que le mot de passe est correct
        if (!$user || !password_verify($data['password'], $user->getPwd())) {
            $this->addFlash('error', 'Email ou mot de passe incorrect.');
            return $this->redirectToRoute('login');
        }

        // Créer une session pour l'utilisateur
        $session = $request->getSession();
        $session->set('user_id', $user->getIduser());

        // Rediriger l'utilisateur vers la page d'accueil
        return $this->redirectToRoute('app_home');
    }

    return $this->render('login/login.html.twig', [
        'form' => $form->createView(),
        'last_email' => $lastEmail,
        'error' => $error,
    ]);
}
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function SessionSet()
    {
        // créer une clé/valeur dans la session
        $this->session->set('ma_cle', 'ma_valeur');
        
        // accéder à une clé de session
        $maValeur = $this->session->get('ma_cle');
        
        // supprimer une clé de session
        $this->session->remove('ma_cle');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(AuthenticationUtils $authenticationUtils, TokenStorageInterface $tokenStorage): Response
    {
        // Clear the token from the session
        $tokenStorage->setToken(null);

        // Redirect to homepage or another page
        return $this->redirectToRoute('app_login');
    }

}
