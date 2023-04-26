<?php

namespace App\Controller;

use App\Entity\Badge;
use App\Form\BadgeType;
use App\Repository\BadgeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 
use Knp\Component\Pager\PaginatorInterface;

#[Route('/badge')]
class BadgeController extends AbstractController
{
    #[Route('/', name: 'app_badge_index', methods: ['GET'])]
    public function index(BadgeRepository $badgeRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $badges = $badgeRepository->findAll();
        $badges = $paginator->paginate(
            $badges,
            $request->query->getInt('page',1),4
        );
        return $this->render('badge/index.html.twig', [
            'badges' => $badges,
        ]);
    }
    
    #[Route('/search', name: 'search', methods: ['GET', 'POST'])]
    public function searchBadge(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Badge::class);
        $requestString = $request->get('searchValue');
        $badg = $repository->findBadgeByNom($requestString);
        return $this->render('badge/search.html.twig', [
            'util' => $badg, 'searchValue' => $requestString
        ]);
    }

    #[Route('/Trie', name: 'TrieByNbpointDESC')]
    public function TrieNbpointDESC(BadgeRepository $repo, PaginatorInterface $paginator, Request $request): Response
{
    $badg = $repo->OrderByNbpointDESC();
    dump($badg); 
    $badg = $paginator->paginate(
        $badg,
        $request->query->getInt('page', 1),
        4
    );
    return $this->render('badge/index.html.twig', [
        'badges' => $badg,

    ]);
}

#[Route('/Triee', name: 'TrieByNbpointASC')]
    public function TrieNbpointASC(BadgeRepository $repo, PaginatorInterface $paginator, Request $request): Response
{
    $badg = $repo->OrderByNbpointASC();
    dump($badg); 
    $badg = $paginator->paginate(
        $badg,
        $request->query->getInt('page', 1),
        4
    );
    return $this->render('badge/index.html.twig', [
        'badges' => $badg,

    ]);
}


    #[Route('/new', name: 'app_badge_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BadgeRepository $badgeRepository): Response
    {
        $badge = new Badge();
        $form = $this->createForm(BadgeType::class, $badge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $badgeRepository->save($badge, true);

            $this->addFlash(
                'info',
                'l\'ajout a été effectué avec succès !'
            );
            return $this->redirectToRoute('app_badge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('badge/new.html.twig', [
            'badge' => $badge,
            'form' => $form,
        ]);
    }

    #[Route('/{idbadge}', name: 'app_badge_show', methods: ['GET'])]
    public function show(Badge $badge): Response
    {
        return $this->render('badge/show.html.twig', [
            'badge' => $badge,
        ]);
    }

    #[Route('/{idbadge}/edit', name: 'app_badge_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Badge $badge, BadgeRepository $badgeRepository): Response
    {
        $form = $this->createForm(BadgeType::class, $badge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $badgeRepository->save($badge, true);

            $this->addFlash(
                'info',
                'La modification a été effectuée avec succès !'
            );
            return $this->redirectToRoute('app_badge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('badge/edit.html.twig', [
            'badge' => $badge,
            'form' => $form,
        ]);
    }

    #[Route('/{idbadge}', name: 'app_badge_delete', methods: ['POST'])]
    public function delete(Request $request, Badge $badge, BadgeRepository $badgeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$badge->getIdbadge(), $request->request->get('_token'))) {
            $badgeRepository->remove($badge, true);
        }
        $this->addFlash(
            'info',
            'La suppression a été effectuée avec succès !'
        );
        return $this->redirectToRoute('app_badge_index', [], Response::HTTP_SEE_OTHER);
    }
   
    


    
}
