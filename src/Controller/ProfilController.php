<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\ProfilType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil/{iduser}/edit', name: 'profil_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(ProfilType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('profil_edit', ['iduser' => $utilisateur->getIduser()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('profil/profile.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/profil/{iduser}', name: 'profil_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('profil/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/', name: 'app_profil_index')]
    public function index(): Response
    {
        return $this->render('profil/profile.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
}
