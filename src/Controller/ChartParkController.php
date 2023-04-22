<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ChartParkController extends AbstractController
{
    #[Route('/chart/test', name: 'app_chart_park')]
    public function index(): Response
    {
        $chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                ],
                [
                    'label' => 'Dataset 2',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                    'data' => [28, 48, 40, 19, 86, 27, 90],
                ],
            ],
        ];
        return $this->render('chart_park/index.html.twig', [
            'chartData' => json_encode($chartData),
        ]);
    }
    #[Route('/chart/bayoudh', name: 'app_park_chart')]
    public function chart(): Response
    {
        $chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Dataset 1',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                ],
                [
                    'label' => 'Dataset 2',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                    'data' => [28, 48, 40, 19, 86, 27, 90],
                ],
            ],
        ];
        return $this->render('chart_park/index.html.twig', [
            'chartData' => json_encode($chartData),

        ]);
      
        
    }
    /////////////////////////////////////////////////////////////////////

}
