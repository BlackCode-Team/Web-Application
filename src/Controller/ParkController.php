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

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;

use Symfony\Component\Serializer\SerializerInterface;
 
use Doctrine\ORM\EntityManagerInterface;


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

    /////////////////////json
    #[Route('/jsonall', name: 'app_park_json', methods: ['GET'])]
    public function jsonindex(ParkRepository $parkRepository, SerializerInterface $serializer): Response
    {
        $parks = $parkRepository->findAll();
        
        // Debugging statement - check the number of parks returned by the query
        dump(count($parks));
        
        $json = $serializer->serialize($parks, 'json', ['Groups' => 'parks']);
        
        // Debugging statement - check the content of $parksNormalises
        dump($json);
    
        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
////////////////////////////////////////////////////////////////////
#[Route("/{idpark}/recjson", name: "recupjsonpark")]
public function parkId(int $idpark, NormalizerInterface $normalizer, SerializerInterface $serializer, EntityManagerInterface $entityManager)
{
    $parkRepository = $entityManager->getRepository(Park::class);
    dump($idpark);
    $park = $parkRepository->find($idpark);
    $json = $serializer->serialize($park, 'json', ['Groups' => 'parks']);
    dump($json); 
    return new Response($json, 200, [
        'Content-Type' => 'application/json'
    ]);
}

///////////////////////////////////////////////////////
#[Route("/addparkJSON/new", name: "addparkJSON")]
public function addparkJSON(Request $req,   NormalizerInterface $Normalizer, SerializerInterface $serializer)
{

    $em = $this->getDoctrine()->getManager();
    $park = new park();
    $park->setNom($req->get('nom'));
    $park->setVille($req->get('ville'));
    $park->setNbspot($req->get('nbspot'));
    $park->setStatut($req->get('statut'));
    $em->persist($park);
    $em->flush();

        $json = $serializer->serialize($park, 'json', ['Groups' => 'parks']);

        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
}
//////////////////////////////////////////////////////////delete
#[Route("/deleteparksJSON/{id}", name: "deleteparksJSON")]
public function deleteparksJSON(Request $req,int $id, NormalizerInterface $Normalizer, SerializerInterface $serializer)
{

    $em = $this->getDoctrine()->getManager();
    $park = $em->getRepository(park::class)->find($id);
    $em->remove($park);
    $em->flush();
    $jsonContent = $serializer->serialize($park, 'json', ['Groups' => 'parks']);
    return new Response("parks deleted successfully " . json_encode($jsonContent));
}

///////////////////////////////////////////////////////update 
#[Route("/updateparkJSON/{id}", name: "updateparkJSON")]
public function updateparkJSON(Request $req, $id, NormalizerInterface $Normalizer, SerializerInterface $serializer)
{

    $em = $this->getDoctrine()->getManager();
    $park = $em->getRepository(park::class)->find($id);
    $park->setNom($req->get('nom'));
    $park->setVille($req->get('ville'));
    $park->setNbspot($req->get('nbspot'));
    $park->setStatut($req->get('statut'));

    $em->flush();

    $jsonContent = $serializer->serialize($park, 'json', ['Groups' => 'parks']);
    return new Response("park updated successfully " . json_encode($jsonContent));
}

///////////////////////////////////////////////////// map json
#[Route('/jsonmap/{idpark}', name: 'app_json_map')]
public function mapjson(Park $park,int $idpark, ParkRepository $parkRepository): Response
{
 $client = new \GuzzleHttp\Client();
 $response = $client->get('https://nominatim.openstreetmap.org/search?q=' . urlencode($park->getVille()) . '&format=jsonv2');
 $data = json_decode($response->getBody(), true);
 $position = [$data[0]['lat'], $data[0]['lon']];
     
 return $this->render('chart_park/map.html.twig', [
     'position' => $position,
     'park' =>$park,
 ]);
 }






////////////////////////////////////////////////
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

