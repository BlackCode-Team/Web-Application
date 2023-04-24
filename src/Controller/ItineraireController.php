<?php

namespace App\Controller;

use App\Entity\Itineraire;
use App\Form\ItineraireType;
use App\Repository\ItineraireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Knp\Component\Pager\PaginatorInterface;

#[Route('/itineraire')]
class ItineraireController extends AbstractController
{
    #[Route('/', name: 'app_itineraire_index', methods: ['GET'])]
    public function index(Request $request,ItineraireRepository $itineraireRepository,PaginatorInterface $paginator): Response
    {
        $itineraires = $itineraireRepository->findAll();
        $itineraires = $paginator->paginate(
            $itineraires, /* query NOT result */
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('itineraire/index.html.twig', [
            'itineraires' =>  $itineraires,
        ]);
    }

    #[Route('/new', name: 'app_itineraire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ItineraireRepository $itineraireRepository): Response
    {
        $itineraire = new Itineraire();
        $form = $this->createForm(ItineraireType::class, $itineraire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $itineraireRepository->save($itineraire, true);

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('itineraire/new.html.twig', [
            'itineraire' => $itineraire,
            'form' => $form,
        ]);
    }

    #[Route('/{iditineraire}', name: 'app_itineraire_show', methods: ['GET'])]
    public function show(Itineraire $itineraire): Response
    {
        return $this->render('itineraire/show.html.twig', [
            'itineraire' => $itineraire,
        ]);
    }

    #[Route('/{iditineraire}/edit', name: 'app_itineraire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Itineraire $itineraire, ItineraireRepository $itineraireRepository): Response
    {
        $form = $this->createForm(ItineraireType::class, $itineraire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $itineraireRepository->save($itineraire, true);

            return $this->redirectToRoute('app_itineraire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('itineraire/edit.html.twig', [
            'itineraire' => $itineraire,
            'form' => $form,
        ]);
    }

    #[Route('/{iditineraire}', name: 'app_itineraire_delete', methods: ['POST'])]
    public function delete(Request $request, Itineraire $itineraire, ItineraireRepository $itineraireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$itineraire->getIditineraire(), $request->request->get('_token'))) {
            $itineraireRepository->remove($itineraire, true);
        }

        return $this->redirectToRoute('app_itineraire_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/{iditineraire}/route', name: 'app_itineraire_route', methods: ['GET'])]
    public function route(Itineraire $itineraire, ItineraireRepository $itineraireRepository): Response
    {
        // Get departure and destination points
        $dep = $itineraire->getPointdepart(); 
        $dest = $itineraire->getPointarrivee();
    
        // Get directions using Google Maps Directions API
        $apiKey = 'AIzaSyD3RpFvEYkmeZF7Wj7CM5j05TtDizkGpe0';
        $client = new \GuzzleHttp\Client();
        $response = $client->get("https://maps.googleapis.com/maps/api/directions/json?origin=".urlencode($dep)."&destination=".urlencode($dest)."&key=".$apiKey);
        $data = json_decode($response->getBody(), true);
    
        if (isset($data['routes'][0])) {
            $startLat = $data['routes'][0]['legs'][0]['start_location']['lat'];
            $startLng = $data['routes'][0]['legs'][0]['start_location']['lng'];
            $endLat = $data['routes'][0]['legs'][0]['end_location']['lat'];
            $endLng = $data['routes'][0]['legs'][0]['end_location']['lng'];
            $polyline = $data['routes'][0]['overview_polyline']['points'];
        } else {
            // Handle the case where there are no routes in the response
            $startLat = null;
            $startLng = null;
            $endLat = null;
            $endLng = null;
            $polyline = null;
        }
    
        return $this->render('itineraire/route.html.twig', [
            'itineraire' => $itineraire,
            'startLat' => $startLat,
            'startLng' => $startLng,
            'endLat' => $endLat,
            'endLng' => $endLng,
            'polyline' => $polyline
        ]);
    }
}
