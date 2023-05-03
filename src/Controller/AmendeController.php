<?php

namespace App\Controller;

use App\Entity\Amende;
use App\Repository\AmendeRepository;
use App\Form\AmendeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/amende')]
class AmendeController extends AbstractController
{
    #[Route('/', name: 'app_amende_index', methods: ['GET'])]
    public function index(AmendeRepository $amendeRepository): Response
    {
        return $this->render('amende/index.html.twig', [
            'amendes' => $amendeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_amende_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AmendeRepository $amendeRepository): Response
    {
        $amende = new Amende();
        $form = $this->createForm(AmendeType::class, $amende);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $amendeRepository->save($amende, true);

            return $this->redirectToRoute('app_amende_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('amende/new.html.twig', [
            'amende' => $amende,
            'form' => $form,
        ]);
    }

    #[Route('/front', name: 'app_amende_indexfront', methods: ['GET'])]
    public function indexfront(AmendeRepository $amendeRepository): Response
    {
        return $this->render('amende/indexfront.html.twig', [
            'amendes' => $amendeRepository->findAll(),
        ]);
    }

    #[Route('/{idamende}', name: 'app_amende_show', methods: ['GET'])]
    public function show(Amende $amende): Response
    {
        return $this->render('amende/show.html.twig', [
            'amende' => $amende,
        ]);
    }

    #[Route('/back/{idamende}', name: 'app_amende_showback', methods: ['GET'])]
    public function showAdmin(Amende $amende): Response
    {
        return $this->render('amende/showback.html.twig', [
            'amende' => $amende,
        ]);
    }

    #[Route('/{idamende}/edit', name: 'app_amende_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Amende $amende, AmendeRepository $amendeRepository): Response
    {
        $form = $this->createForm(AmendeType::class, $amende);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $amendeRepository->save($amende, true);

            return $this->redirectToRoute('app_amende_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('amende/edit.html.twig', [
            'amende' => $amende,
            'form' => $form,
        ]);
    }

    #[Route('/{idamende}', name: 'app_amende_delete', methods: ['POST'])]
    public function delete(Request $request, Amende $amende, AmendeRepository $amendeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$amende->getIdamende(), $request->request->get('_token'))) {
            $amendeRepository->remove($amende, true);
        }

        return $this->redirectToRoute('app_amende_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/filtre/status', name: 'amende_filter' ,methods: ['GET'])]
    public function filter(Request $request)
    {
        $statusamende = $request->query->get('statusamende');
        if ($statusamende=='Tous') {
            $amendes = $this->getDoctrine()
                ->getRepository(Amende::class)
                ->findAll();}
                else{
        $amendes = $this->getDoctrine()
            ->getRepository(Amende::class)
            ->findBy(['statusamende' => $statusamende]);
                }
        return $this->render('amende/index.html.twig', [
            'amendes' => $amendes,
        ]);
    }
    
        #[Route('/front/filtre/status', name: 'amende_filterfront' ,methods: ['GET'])]
        public function filterfront(Request $request)
        {
            $statusamende = $request->query->get('statusamende');
            if ($statusamende=='Tous') {
                $amendes = $this->getDoctrine()
                    ->getRepository(Amende::class)
                    ->findAll();}
                    else{
            $amendes = $this->getDoctrine()
                ->getRepository(Amende::class)
                ->findBy(['statusamende' => $statusamende]);
                    }
            return $this->render('amende/indexfront.html.twig', [
                'amendes' => $amendes,
            ]);
        }
}
