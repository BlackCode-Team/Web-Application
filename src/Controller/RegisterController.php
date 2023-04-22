<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegisterType;
use App\Repository\UtilisateurRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormError;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, ManagerRegistry $doctrine, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
            $em=$doctrine ->getManager();
        // Créer une instance de l'entité Utilisateur
        $user = new Utilisateur();

        // Créer le formulaire à partir de la classe RegisterType
        $form = $this->createForm(RegisterType::class, $user);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);
       
        if ($form->isSubmitted()) {
            $token = new CsrfToken('your_form', $request->request->get('csrf_token'));
            if (!$csrfTokenManager->isTokenValid($token)) {
                $form->addError(new FormError('Invalid CSRF token.'));
                return $this->render('register/register.html.twig', [
                    'form' => $form->createView(),
                ]);;
            }
            // Le formulaire est valide, faire quelque chose avec les données
           
            $em->persist($user);
            $em->flush();

            // Rediriger l'utilisateur vers la page de connexion
            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }else{
            #$form->get('pwd')->addError(new FormError('*******test*******'));
            return $this->render('register/register.html.twig', [
                'form' => $form->createView(),
            ]);
        }
        
    }
}
