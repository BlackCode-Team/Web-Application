<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\OffreType; 

use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;

#[Route('/offre')]
class OffreController extends AbstractController
{
    #[Route('/', name: 'app_offre_index', methods: ['GET'])]
    public function index(OffreRepository $offreRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $offres = $offreRepository->findAll();
        $offres = $paginator->paginate(
            $offres,
            $request->query->getInt('page',1),6
        );
        return $this->render('offre/index.html.twig', [
            'offres' => $offres,
        ]);
    }

    #[Route('/searchO', name: 'searchO', methods: ['GET', 'POST'])]
    public function searchOffre(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Offre::class);
        $requestString = $request->get('searchValue');
        $offres = $repository->findOffre($requestString);
        return $this->render('offre/search.html.twig', [
            'util' => $offres, 'searchValue' => $requestString
        ]);
    }
  


    #[Route('/new', name: 'app_offre_new', methods: ['GET', 'POST'])]
    public function new(FlashyNotifier $flashy,Request $request, OffreRepository $offreRepository): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offreRepository->save($offre, true);

            $this->addFlash(
                'info',
                'l\'ajout a été effectué avec succès !'
            );

            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('offre/new.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offre_show', methods: ['GET'])]
    public function show(Offre $offre): Response
    {
        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/{idoffre}/edit', name: 'app_offre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offre $offre, OffreRepository $offreRepository): Response
    {
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offreRepository->save($offre, true);

            $this->addFlash(
                'info',
                'La modification a été effectuée avec succès !'
            );
            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offre_delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre, OffreRepository $offreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getIdoffre(), $request->request->get('_token'))) {
            $offreRepository->remove($offre, true);
        }
        $this->addFlash(
            'info',
            'La suppression a été effectuée avec succès !'
        );
        return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
    }
}
