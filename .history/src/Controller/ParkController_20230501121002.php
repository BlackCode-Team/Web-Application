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
use Symfony\Component\Security\Core\Security;

use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

#[Route('/park')]
class ParkController extends AbstractController
{
    #[Route('/', name: 'app_park_index', methods: ['GET'])]
    public function index(ParkRepository $parkRepository, Security $security): Response
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
        $totalSpots = $parkRepository->getTotalSpots();
        $allParks = $parkRepository->findAll();
        $parkData = [];
        
        foreach ($allParks as $p) {
            $parkSpots = $p->getNbspot();
            $parkPercentage = $parkSpots;
            $parkData[] = [
                'label' => $p->getNom(),
                'data' => $parkSpots,
                'percentage' => $parkPercentage,
            ];
        }
        ////// pie chart 
        $chartData = [
            'labels' => array_column($parkData, 'label'),
            'datasets' => [
                [
                    'data' => array_column($parkData, 'percentage'),
                    'backgroundColor' => [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(231, 233, 237, 0.2)',
                        'rgba(149, 165, 166, 0.2)',
                        'rgba(241, 196, 15, 0.2)',
                        'rgba(243, 156, 18, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(231, 233, 237, 1)',
                        'rgba(149, 165, 166, 1)',
                        'rgba(241, 196, 15, 1)',
                        'rgba(243, 156, 18, 1)',
                    ],
                    'borderWidth' => 1,
                ],
            ],
        ];
        /////////////////////////////////////////
        ////////////////////bar chart 
        $labels = array();
        $data = array();
        foreach ($parks as $park) {
            array_push($labels, $park->getNom());
            array_push($data, $park->getNbspot());
        }
        $chartData2 = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Number of spots',
                    'data' => $data,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];
        return $this->render('park/indexadmin.html.twig', [
            'parks' => $parks,
            'chartData' => json_encode($chartData),
            'chartData2' => json_encode($chartData2),
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

       ////////////////////////////////////////////////////////////////TEST
       #[Route('/{idpark}/chart/test', name: 'app_chart_park')]
       public function chart(Park $park,int $idpark, ParkRepository $parkRepository): Response
       {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://nominatim.openstreetmap.org/search?q=' . urlencode($park->getVille()) . '&format=jsonv2');
        $data = json_decode($response->getBody(), true);
        $position = [$data[0]['lat'], $data[0]['lon']];
            
        return $this->render('chart_park/index.html.twig', [
            'position' => $position,
            'park' =>$park,
        ]);
        }
    /////////////////////////////////////////////////////////////////////



   


}

