<?php

namespace App\Controller;

use App\Entity\Park;
use App\Form\ParkType;
use App\Repository\ParkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

#[Route('/park')]
class ParkController extends AbstractController
{
    #[Route('/', name: 'app_park_index', methods: ['GET'])]
    public function index(ParkRepository $parkRepository): Response
    {
        return $this->render('park/index.html.twig', [
            'parks' => $parkRepository->findAll(),
        ]);
    }

    //zedt el pagination 
    #[Route('/admin', name: 'app_park_indexad', methods: ['GET'])]
    public function indexad(Request $request,ParkRepository $parkRepository,PaginatorInterface $paginator): Response
    {   
        $parks = $parkRepository->findAll();
        $parks = $paginator->paginate(
            $parks, /* query NOT result */
            $request->query->getInt('page', 1),
            4
        );

        return $this->render('park/indexadmin.html.twig', [
            'parks' => $parks,
        ]);
    }

    #[Route('/new', name: 'app_park_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParkRepository $parkRepository): Response
    {
        $park = new Park();
        $form = $this->createForm(ParkType::class, $park);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $parkRepository->save($park, true);

            return $this->redirectToRoute('app_park_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('park/new.html.twig', [
            'park' => $park,
            'form' => $form,
        ]);
    }

    #[Route('/{idpark}', name: 'app_park_show', methods: ['GET'])]
    public function show(Park $park): Response
    {
        return $this->render('park/show.html.twig', [
            'park' => $park,
        ]);
    }
    #[Route('/{idpark}/adm', name: 'app_park_showadm', methods: ['GET'])]
    public function showadm(Park $park): Response
    {

        return $this->render('park/showadm.html.twig', [
            'park' => $park,
        ]);
        
    }

    #[Route('/{idpark}/edit', name: 'app_park_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Park $park, ParkRepository $parkRepository): Response
    {
        $form = $this->createForm(ParkType::class, $park);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $parkRepository->save($park, true);

            return $this->redirectToRoute('app_park_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('park/edit.html.twig', [
            'park' => $park,
            'form' => $form,
        ]);
    }

    #[Route('/{idpark}', name: 'app_park_delete', methods: ['POST'])]
    public function delete(Request $request, Park $park, ParkRepository $parkRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$park->getIdpark(), $request->request->get('_token'))) {
            $parkRepository->remove($park, true);
        }

        return $this->redirectToRoute('app_park_index', [], Response::HTTP_SEE_OTHER);
    }

       ////////////////////////////////////////////////////////////////
       #[Route('/{idpark}/chart/test', name: 'app_chart_park')]
       public function chart(Park $park,int $idpark, ParkRepository $parkRepository): Response
       {
           $park = $parkRepository->find($idpark);
           $chartData = [
               'labels' => [],
               'datasets' => [
               
                   [
                       'label' => 'nbSpots',
                       'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                       'borderColor' => 'rgba(54, 162, 235, 1)',
                       'borderWidth' => 1,
                       'data' => [],
                   ],
               ],
           ];
        $chartData['labels'][0]['data'][] = $park->getNom(); // Add wins to first dataset
        $chartData['datasets'][0]['data'][] = $park->getNbspot(); // Add losses to second dataset
           return $this->render('chart_park/index.html.twig', [
               'chartData' => json_encode($chartData),
           ]);
        }
    /////////////////////////////////////////////////////////////////////



   


}

