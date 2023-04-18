<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Offre;

use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Historique;
use App\Repository\HistoriqueRepository;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    // #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    // public function index(ReservationRepository $reservationRepository): Response
    // {
    //     return $this->render('reservation/index.html.twig', [
    //         'reservations' => $reservationRepository->findAll(),
    //     ]);
    // }
    #[Route('/', name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();
        
        foreach ($reservations as $reservation) 
        {
            $currentDate = date('Y-m-d H:i:s');
            $startDate = strtotime($reservation->getDatedebut()->format('Y-m-d H:i:s'));
            $endDate = strtotime($reservation->getDatefin()->format('Y-m-d H:i:s'));

            $currentDate = strtotime($currentDate);
            
            if ($currentDate > $endDate) {
                $reservation->setStatus('Termine');
            } else {
                $reservation->setStatus('En cours');
            }
            $reservationRepository->save($reservation, true);
        }
        
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }
    
    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request,HistoriqueRepository $historiqueRepository, ReservationRepository $reservationRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        $totalPrice = 0;
        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);
        $historique = new Historique();
        $historique->setReservation($reservation);
        $historiqueRepository->save($historique, true);
     //   $totalPrice = $this->calculateTotalPrice($reservation);
     //   $form->get('prixreservation')->setData($totalPrice);
        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'totalPrice' => $totalPrice
        ]);
    }

    #[Route('/{idreservation}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{idreservation}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }
       /* $currentDate = date('Y-m-d H:i:s');
        $startDate = strtotime($reservation->getDatedebut()->format('Y-m-d H:i:s'));
        $endDate = strtotime($reservation->getDatefin()->format('Y-m-d H:i:s'));
        $currentDate = strtotime($currentDate);
        if ($currentDate > $endDate) {
            $reservation->setStatus('Termineeee');
        } else {
            $reservation->setStatus('En courss');
        }
        $reservationRepository->save($reservation, true);*/
        return $this->renderForm('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/{idreservation}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdreservation(), $request->request->get('_token'))) {
            $reservationRepository->remove($reservation, true);
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/tarif/{idreservation}', methods: ['GET'])]
    public function calculateTotalPrice(Reservation $reservation ): Response

    {
        // Get the base price from the reservation object
        $basePrice = 5;
    
        // Calculate the price based on the time of rental
        $datedebut = ($reservation->getDatedebut());
$datefin = ($reservation->getDatefin());

// Difference en jours
$diffDays = $datedebut->diff($datefin)->days;

// Difference en minutes
$diffMinutes = $datedebut->diff($datefin)->format('%i');

// Calcul du prix
$timePrice = ($diffDays * 24 * $reservation->getVehicule()->getPrix()) + ($diffMinutes * $reservation->getVehicule()->getPrix() / 60)+$reservation->getDatedebut()->diff($reservation->getDatefin())->h * $reservation->getVehicule()->getPrix();

        // Calculate the price based on the distance traveled
        $distancePrice = $reservation->getItineraire()->getkilometrage() * $reservation->getVehicule()->getPrix();
    
        // Get the discount from the reservation object
        //$id=$reservation->getIduser();
     //   $offre = $this->getDoctrine()->getRepository(Offre::class)->find($idoffre);
      //  $discount = $offre ? $offre->getTauxderemise() : 0;
    
        // Calculate the total price
        $totalPrice = $basePrice + $timePrice + $distancePrice;
        // - ($discount / 100 * $basePrice);
      //  $response = new Response("Prix total : " . $totalPrice . "-----timePrice  ". $timePrice . "distancePrice ". $distancePrice . " euros" );
      $response = new Response($totalPrice);
       return $response;
        //return $totalPrice;
    }
    

  
}
