<?php

namespace App\Controller;
use DateTime;
use App\Entity\Reservation;
use App\Entity\Itineraire;

use App\Entity\Offre;
use App\Entity\Utilisateur;
use App\Entity\Vehicule;
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
use App\Repository\UtilisateurRepository;
use App\Controller\PdfService;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;
use Symfony\Component\Security\Core\Security;
use App\Repository\ItineraireRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

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
    public function index(Request $request, ReservationRepository $reservationRepository,PaginatorInterface $paginator): Response
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

        $reservations = $paginator->paginate(
            $reservations, 
            $request->query->getInt('page', 1), 
            5
        );
        
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }
    
    //////////////////////////////////::::

    
    #[Route('/new/{idvehicule}', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request,HistoriqueRepository $historiqueRepository, ReservationRepository $reservationRepository, int $idvehicule,Security $security,ItineraireRepository $itineraireRepository): Response
    {
        $user = $security->getUser();
        $vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find($idvehicule);
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);
        $historique = new Historique();
        $historique->setReservation($reservation);
        $historiqueRepository->save($historique, true);
        $reservation->setUtilisateur($user);
        $itineraires = $itineraireRepository->find(5);
         $reservation->setItineraire($itineraires);
        $reservation->setVehicule($vehicule);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reservation);
        $entityManager->flush();
     //   $form->get('prixreservation')->setData($totalPrice);
        // $form->get('vehicule')->setData(null);

        return $this->redirectToRoute('app_reservation_editPrix', ['idreservation' => $reservation->getIdreservation()], Response::HTTP_SEE_OTHER);
    }
        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'vehicule'=>$vehicule,
            'utilisateur'=>$user

        ]);
    }

    #[Route('/{idreservation}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/back/{idreservation}', name: 'app_reservation_showback', methods: ['GET'])]
    public function showadmin(Reservation $reservation): Response
    {
        return $this->render('reservation/showadmin.html.twig', [
            'reservation' => $reservation,
        ]);
    }
    #[Route('/{idreservation}/editPrix', name: 'app_reservation_editPrix', methods: ['GET', 'POST'])]
    public function editPrix(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): Response
    {
        $totalPrice = $this->calculateTotalPrice($reservation);
        $a=intval($totalPrice);
        $reservation->setPrixreservation($a);
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();

           // return $this->redirectToRoute('app_reservation_show', ['idreservation' => $reservation->getIdreservation()], Response::HTTP_SEE_OTHER);
        }
            return $this->renderForm('reservation/confirmation.html.twig', [
                'reservation' => $reservation,
                'form' => $form,
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
    public function calculateTotalPrice(Reservation $reservation )
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
      $response = new Response((int)$totalPrice);
       // return $totalPrice;
       return ((int)$totalPrice);
    }
    
    // public function RechercherParStatus(Reservation $reservation ){
    //         $reservations = $reservationRepository->findAll();
        
    // foreach ($reservations as $reservation) 
    // {if ($reservation->getStatus()='Termine'){

    // }else 
    

    // }

    #[Route('/filtre/status', name: 'reservation_filter' ,methods: ['GET'])]
    public function filter(Request $request,PaginatorInterface $paginator)
    {
        $status = $request->query->get('status');
        if ($status=='Tous') {
            $reservations = $this->getDoctrine()
                ->getRepository(Reservation::class)
                ->findAll();}
                else{
        $reservations = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->findBy(['status' => $status]);
                }

                $reservations = $paginator->paginate(
                    $reservations, 
                    $request->query->getInt('page', 1), 
                    5
                );
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[route('/Search/a',name:'search',methods: ['GET'])]
    function search(ReservationRepository $repo,Request $request ,PaginatorInterface $paginator){
     $cinUtilisateur = $request->get('mm');
     $reservations=$repo->SearchBy($cinUtilisateur);

     $reservations = $paginator->paginate(
        $reservations, 
        $request->query->getInt('page', 1), 
        5
    );

     return $this->render('reservation/index.html.twig', [
        'reservations' => $reservations,
    ]);
}

#[Route('/pdf/{idreservation}', name: 'reservation_pdf')]
public function generatePdfa(Reservation $reservation = null, PdfService $pdf) {
    $writer = new PngWriter();
    $randomCode = uniqid(); // generate a random code
    $qrCode = QrCode::create($randomCode)
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
        ->setSize(120)
        ->setMargin(0)
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));
        // $logo = Logo::create($this->getParameter('kernel.project_dir').'/public/img/qr.jpg')
        //             ->setResizeToWidth(60);
    $label = Label::create('')->setFont(new NotoSans(8));

    $qrCodes = [];
    $qrCodes['img'] = $writer->write($qrCode)->getDataUri();
    $qrCodes['simple'] = $writer->write(
                            $qrCode,
                            null,
                        )->getDataUri();
    $stringqrCodes = implode(', ', $qrCodes);

    $imageSrc = $this->imageToBase64($this->getParameter('kernel.project_dir') . '/public/assets/images/logo.png');
    $html = $this->render('reservation/detail.html.twig', [
        'reservation' => $reservation,
'stringqrCodes' => $stringqrCodes ,
'imageSrc'=>$imageSrc   ]);

    $response = $pdf->generatePdf($html);
    $response->headers->set('Content-Disposition', 'attachment; filename="detail_Reservation.pdf"');
    return $response;}
    
    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }

    // #[Route('/QR/{idreservation}', name: 'reservation_QR')]
    // public function generateQR(): Response
    // {
    //     $writer = new PngWriter();
    //     $qrCode = QrCode::create('alooo')
    //         ->setEncoding(new Encoding('UTF-8'))
    //         ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
    //         ->setSize(120)
    //         ->setMargin(0)
    //         ->setForegroundColor(new Color(0, 0, 0))
    //         ->setBackgroundColor(new Color(255, 255, 255));
    //         $logo = Logo::create($this->getParameter('kernel.project_dir').'/public/img/qr.jpg')
    //                     ->setResizeToWidth(60);
    //     $label = Label::create('')->setFont(new NotoSans(8));
 
    //     $qrCodes = [];
    //     $qrCodes['img'] = $writer->write($qrCode, $logo)->getDataUri();
    //     $qrCodes['simple'] = $writer->write(
    //                             $qrCode,
    //                             null,
    //                         )->getDataUri();
    
   
    //     return $this->render('reservation/qr.html.twig', $qrCodes);
    // }
    #[Route('/jsonall/a', name: 'app_reservation_json', methods: ['GET'])]
    public function jsonindex(ReservationRepository $reservationRepository, SerializerInterface $serializer): Response
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

        // Debugging statement - check the number of reservations returned by the query
        dump(count($reservations));

        $json = $serializer->serialize($reservations, 'json', ['Groups' => 'reservations']);

        // Debugging statement - check the content of $reservationsNormalises
        dump($json);

        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
    
    #[Route('/newres/JSON/', name: 'app_reservation_new_JSON', methods: ['GET', 'POST'])]
    public function newJSON(Request $req, SerializerInterface $serializer)
    {
        $reservation = new Reservation();

        $datedebut = DateTime::createFromFormat('Y-m-d H:i:s', $req->get('datedebut'));
        $datefin = DateTime::createFromFormat('Y-m-d H:i:s', $req->get('datefin'));
    
        $reservation->setDatedebut($datedebut);
        $reservation->setDatefin($datefin);
    
        $reservation->setStatus($req->get('status'));
        $reservation->setPrixreservation($req->get('prixreservation'));
$vehicule = $this->getDoctrine()->getRepository(Vehicule::class)->find($req->get('idvehicule'));
$reservation->setVehicule($vehicule);
$itineraire = $this->getDoctrine()->getRepository(Itineraire::class)->find($req->get('iditineraire'));
$reservation->setItineraire($itineraire);
$utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->find($req->get('idutilisateur'));
$reservation->setUtilisateur($utilisateur);

        //  $reservation->setItineraire($req->get('itineraire'));

        // $reservation->setUtilisateur($req->get('utilisateur'));

        //  $reservation->setItineraire($itineraires);
        // $reservation->setVehicule($vehicule);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reservation);
        $entityManager->flush(); 
    
        $json = $serializer->serialize($reservation, 'json', ['Groups' => 'reservations']);

        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
}


  
    #[Route('/JSON/{idreservation}', name: 'app_reservation_show_JSON', methods: ['GET'])]
    public function showJSON(Reservation $reservation,ReservationRepository $reservationRepository, EntityManagerInterface $entityManager , SerializerInterface $serializer,int $idreservation): Response
    {
        $reservationRepository = $entityManager->getRepository(Reservation::class);
        $reservation = $reservationRepository->find($idreservation);
                $jsonContent = $serializer->serialize($reservation, 'json', ['Groups' => 'reservations']);
                
        return new Response($jsonContent, 200, [
            'Content-Type' => 'application/json'
        ]);   
     }        

    #[Route('/back/JSON/{idreservation}', name: 'app_reservation_showback_JSON', methods: ['GET'])]
    public function showadminJSON(Reservation $reservation): Response
    {
        return $this->render('reservation/showadmin.html.twig', [
            'reservation' => $reservation,
        ]);
    }
    #[Route('/JSON/{idreservation}/editPrix', name: 'app_reservation_editPrix_JSON', methods: ['GET', 'POST'])]
public function editPrixJSON(Request $request, Reservation $reservation, ReservationRepository $reservationRepository): JsonResponse
{
    $totalPrice = $this->calculateTotalPrice($reservation);
    $a=intval($totalPrice);
    $reservation->setPrixreservation($a);
    $form = $this->createForm(ReservationType::class, $reservation);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $reservationRepository->save($reservation, true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reservation);
        $entityManager->flush();
    }
    return $this->json([
        'reservation' => $reservation,
        'form' => $form->createView(),
    ]);
}

#[Route('/JSON/edit/{idreservation}', name: 'app_reservation_edit_JSON', methods: ['GET', 'POST'])]
public function editJSON(Request $req,int $idreservation, Reservation $reservation, ReservationRepository $reservationRepository,SerializerInterface $serializer)
{
    $em = $this->getDoctrine()->getManager();
    $reservation = $em->getRepository(reservation::class)->find($idreservation);
 
    $datedebut = DateTime::createFromFormat('Y-m-d H:i:s', $req->get('datedebut'));
    $datefin = DateTime::createFromFormat('Y-m-d H:i:s', $req->get('datefin'));

    $reservation->setDatedebut($datedebut);
    $reservation->setDatefin($datefin);

    $reservation->setStatus($req->get('status'));
    $reservation->setPrixreservation($req->get('prixreservation'));

    $em->flush();

    $jsonContent = $serializer->serialize($reservation, 'json', ['Groups' => 'reservations']);
    return new Response("reservation updated successfully " . json_encode($jsonContent));
}


#[Route('/deleteJSON/{idreservation}', name: 'app_reservation_delete_JSON')]
public function deleteJSON(Request $request, int $idreservation,Reservation $reservation, ReservationRepository $reservationRepository, SerializerInterface $serializer)
{

    $em = $this->getDoctrine()->getManager();
    $reservation = $em->getRepository(reservation::class)->find($idreservation);
    $em->remove($reservation);
    $em->flush();
    $jsonContent = $serializer->serialize($reservation, 'json', ['Groups' => 'reservations']);
    return new Response("reservation deleted successfully " . json_encode($jsonContent));
}

#[Route('/JSON/tarif/{idreservation}', methods: ['GET'])]
public function calculateTotalPriceJSON(Reservation $reservation): JsonResponse
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

    // Calculate the total price
    $totalPrice = $basePrice + $timePrice + $distancePrice;

    return $this->json(['totalPrice' => (int)$totalPrice]);
}

#[Route('/filtre/status/JSON', name: 'reservation_filter_json', methods: ['GET'])]
public function filterJSON(Request $request, PaginatorInterface $paginator)
{
$status = $request->query->get('status');
if ($status == 'Tous') {
$reservations = $this->getDoctrine()->getRepository(Reservation::class)->findAll();
} else {
$reservations = $this->getDoctrine()->getRepository(Reservation::class)->findBy(['status' => $status]);
}

$reservations = $paginator->paginate(
    $reservations,
    $request->query->getInt('page', 1),
    5);
}


#[Route('/Search/a/JSON', name: 'reservation_search_json', methods: ['GET'])]
public function searchJSON(ReservationRepository $repo, Request $request, PaginatorInterface $paginator)
{
$cinUtilisateur = $request->get('mm');
$reservations = $repo->SearchBy($cinUtilisateur);
$reservations = $paginator->paginate(
    $reservations,
    $request->query->getInt('page', 1),
    5
);
$responseArray = [];
foreach ($reservations as $reservation) {
    $reservationArray = [
        'id' => $reservation->getId(),
        'nom' => $reservation->getNom(),
        'prenom' => $reservation->getPrenom(),
        'email' => $reservation->getEmail(),
        'telephone' => $reservation->getTelephone(),
        'date' => $reservation->getDate()->format('Y-m-d H:i:s'),
        'nombrePersonnes' => $reservation->getNombrePersonnes(),
        'status' => $reservation->getStatus(),
    ];
    array_push($responseArray, $reservationArray);
}
$response = new JsonResponse($responseArray);
return $response;
}

#[Route('/pdf/{idreservation}/JSON', name: 'reservation_pdf_json', methods: ['GET'])]
public function generatePdfaJSON(Reservation $reservation = null, PdfService $pdf)
{
$writer = new PngWriter();
$randomCode = uniqid(); // generate a random code
$qrCode = QrCode::create($randomCode)
->setEncoding(new Encoding('UTF-8'))
->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
->setSize(120)
->setMargin(0)
->setForegroundColor(new Color(0, 0, 0))
->setBackgroundColor(new Color(255, 255, 255));
// $logo = Logo::create($this->getParameter('kernel.project_dir').'/public/img/qr.jpg')
// ->setResizeToWidth(60);
$label = Label::create('')->setFont(new NotoSans(8));


}

}