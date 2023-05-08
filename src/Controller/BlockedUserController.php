<?php

namespace App\Controller;


use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;

class BlockedUserController extends AbstractController
{
    #[Route('/block', name: 'app_block_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateurs = $utilisateurRepository->findBy(['role' => 'client']);

        return $this->render('block_user/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }
    /**
     * @Route("/block-user/{iduser}", name="block_user")
     */
    public function blockUser(Utilisateur $user, EntityManagerInterface $entityManager)
    {
        $user->setIs_blocked(1);
        $entityManager->flush();

        $this->addFlash('success', 'User has been blocked!');

        return $this->redirectToRoute('app_block_index');
    }

    #[Route('/alerteBlock', name: 'blocked_user')]
    public function alert(): Response
    {
        return $this->render('block_user/alerte_block.html.twig');
    }
}
