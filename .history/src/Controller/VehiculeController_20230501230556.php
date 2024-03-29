<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Entity\Itineraire;
use App\Form\VehiculeType;
use App\Controller\ItineraireRepository;
use App\Repository\VehiculeRepository;
use App\Entity\Rating;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

#[Route('/vehicule')]
class VehiculeController extends AbstractController
{
    #[Route('/', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(VehiculeRepository $vehiculeRepository,ItineraireRepository $itineraireRepository): Response
    {
    // Retrieve the itineraire ID parameter from the request object
    $iditineraire = $request->query->get('iditineraire');
    
    // Retrieve the relevant itineraire from your database
    $itineraire = $itineraireRepository->find($iditineraire);
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
            'itineraire'=> $itineraire,
        ]);
    }

    #[Route('/indexback', name: 'app_vehicule_indexback', methods: ['GET'])]
    public function indexbackkk(Request $request, VehiculeRepository $vehiculeRepository, PaginatorInterface $paginator): Response
    {
        $sort = $request->query->get('sort');
        if ($sort == 'price_asc') {
            $vehicules = $vehiculeRepository->findBy([], ['prix' => 'ASC']);
        } else if ($sort == 'price_desc') {
            $vehicules = $vehiculeRepository->findBy([], ['prix' => 'DESC']);
        } else {
            $vehicules = $vehiculeRepository->findAll();
        }

        $type = $request->query->get('type');
        if (!$type || $type == 'Tous') {
            $vehicules = $vehiculeRepository->findAll();
        } else {
            $vehicules = $vehiculeRepository->findBy(['type' => $type]);
        }
        
        $vehicules = $paginator->paginate(
            $vehicules, 
            $request->query->getInt('page', 1), 
            6 
        );

        return $this->render('vehicule/list.html.twig', [
            'vehicules' => $vehicules,
            'sort' => $sort,
        ]);
    }



  /*  #[Route('/1/{id}', name:'vehicules_par_location')]
    public function vehiculesByPark(Request $request, VehiculeRepository $vehiculeRepository): Response
    {
        $idpark = $request->query->get('idpark');
        $parkName = ''; // Set a default value for the park name
        
        // Retrieve the park name using the park ID
        if ($idpark) {
            $park = $this->getDoctrine()
                ->getRepository(Park::class)
                ->find($idpark);
            $parkName = $park->getNom();
        }
        $vehicules =$vehiculeRepository->findByLocationOrderByPrix($parkName);

        return $this->render('vehicule/list.html.twig', [
            'vehicules' => $vehicules,
            'parkName' => $parkName,
        ]);
    }*/

    #[Route('/back', name: 'app_vehicule_back', methods: ['GET'])]
    public function indexback(Request $request,VehiculeRepository $vehiculeRepository, PaginatorInterface $paginator): Response
    {   
        $vehicules = $vehiculeRepository->findAll();
        $totalCars = $vehiculeRepository->getTotalTypeVoiture();
        $totalTrottinette = $vehiculeRepository->getTotalTypeTrottinette();

        $type = $request->query->get('type');
        if (!$type || $type == 'Tous') {
            $vehicules = $vehiculeRepository->findAll();
        } else {
            $vehicules = $vehiculeRepository->findBy(['type' => $type]);
        }
        $vehicules = $paginator->paginate(
            $vehicules, 
            $request->query->getInt('page', 1), 6 
        );
        
        // Pie chart 
       $chartData = [
        'labels' => ["Voitures", "Trottinettes"],
        'datasets' => [
                [
                    'data' => [$totalCars, $totalTrottinette],
                    'backgroundColor' => [
                        'rgba(4, 18, 49, 1)',
                        'rgba(149, 165, 166, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(4, 18, 49, 1)',
                        'rgba(149, 165, 166, 1)',
                    ],
                    'borderWidth' => 1,
                ],
            ],
        ];
        //////line chart 
        $currentHour = (int) date('H'); // temps actuel

        $vehicles = $vehiculeRepository->findAll();

        $disponibles = []; // tableau pr les vehi dispo
        $reserves = []; // tableau pr les vehi reserver

        foreach ($vehicles as $vehicle) {
            // condition bech na3rfou voiture dispo fi wa9t heka wala le 
            if ($currentHour >= 0 && $currentHour < 15 && $vehicle->getStatus() === 'disponible') {
                $disponibles[] =$vehiculeRepository->findAll();
            } else {
                $reserves[] = $vehicle;
            }
        }

        $availabilityData = [
            'labels' => ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00'],
            'datasets' => [
                [
                    'label' => 'Disponible',
                    'data' => [
                        count($disponibles) >= 1 && $currentHour == 9 ? count($disponibles) : 7,
                        count($disponibles) >= 2 && $currentHour == 10 ? count($disponibles) : 5,
                        count($disponibles) >= 3 && $currentHour == 11 ? count($disponibles) : 3,
                        count($disponibles) >= 4 && $currentHour == 12 ? count($disponibles) : 1,
                        count($disponibles) >= 5 && $currentHour == 13 ? count($disponibles) : 0,
                        count($disponibles) >= 6 && $currentHour == 14 ? count($disponibles) : 2,
                        0, // b7okem 15h heya max donc n7tou zero ken fet lwa9t ma3neh tji tchouf stat ba3ed 15h tal9a two lines ta3 chart fil sfer
                    ],
                    'backgroundColor' => 'rgba(4, 18, 49, 1)',
                    'borderColor' => 'rgba(4, 18, 49, 1)',
                    'borderWidth' => 1,
                    'pointRadius' => 3,
                    'pointBackgroundColor' => 'rgba(4, 18, 49, 1)',
                ],
                [
                    'label' => 'Réservé',
                    'data' => [
                        count($reserves) >= 1 && $currentHour == 9 ? count($reserves) : 0,
                        count($reserves) >= 2 && $currentHour == 10 ? count($reserves) : 2,
                        count($reserves) >= 3 && $currentHour == 11 ? count($reserves) : 4,
                        count($reserves) >= 4 && $currentHour == 12 ? count($reserves) : 6,
                        count($reserves) >= 5 && $currentHour == 13 ? count($reserves) : 7,
                        count($reserves) >= 6 && $currentHour == 14 ? count($reserves) : 5,
                        0, 
                    ],
                    'backgroundColor' => 'rgba(149, 165, 166, 0.2)',
                    'borderColor' => 'rgba(149, 165,166, 1)',
                    'borderWidth' => 1,
                    'pointRadius' => 3,
                    'pointBackgroundColor' => 'rgba(149, 165, 166, 1)',
                    ],
                    ],
                    ];
    
        return $this->render('vehicule/backoffice.html.twig', [
            'vehicules' =>  $vehicules,
            'chartData' => json_encode($chartData),
            'availabilityData' => json_encode($availabilityData),
        ]);  
    }

    #[Route('/search', name: 'search_vehicule', methods: ['GET'])]
    public function search(Request $request)
    {
        $status = $request->query->get('status');
        $itineraireId = $request->query->get('itineraireId');
        $em = $this->getDoctrine()->getManager();
        $vehicules = $em->getRepository(Vehicule::class)->findBy([
            'status' => $status,
            'itineraire' => $itineraireId
        ]);
        $response = [];
        foreach ($vehicules as $vehicule) {
            $response[] = [
                'id' => $vehicule->getIdvehicule(),
                'modele' => $vehicule->getModele(),
                'prix' => $vehicule->getPrix(),
                'batterie' => $vehicule->getBatterie(),
                'matricule' => $vehicule->getMatricule(),
                'puissance' => $vehicule->getPuissance(),
                'image' => $vehicule->getImage(),
                'status' => $vehicule->getStatus(),
                'type' => $vehicule->getType()
            ];
        }
        return new JsonResponse($response);
    }


    #[Route('/new', name: 'app_vehicule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, VehiculeRepository $vehiculeRepository): Response
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['image']->getData();
            $imageFile = $form->get('image')->getData();
            
            // génération d'un nom de fichier unique
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // déplacement du fichier dans le dossier public/images
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );

            // mise à jour de l'attribut "image" de l'objet véhicule
            $vehicule->setImage($newFilename);
            $vehiculeRepository->save($vehicule, true);
            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('vehicule/new.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }


    #[Route('/{idvehicule}', name: 'app_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/{idvehicule}/edit', name: 'app_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, VehiculeRepository $vehiculeRepository): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();
            $imageFile = $form->get('image')->getData();
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );
            $vehicule->setImage($newFilename);
            $vehiculeRepository->save($vehicule, true);

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    
    #[Route('/{idvehicule}', name: 'app_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, VehiculeRepository $vehiculeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getIdvehicule(), $request->request->get('_token'))) {
$entityManager = $this->getDoctrine()->getManager();
    $entityManager->remove($vehicule);
    $entityManager->flush();        }

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }

  
   #[Route('/filtre/type', name: 'vehicule_filter' ,methods: ['GET'])]
    public function filter(Request $request)
    {
        $type = $request->query->get('type');
        if ($type=='Tous') {
            $vehicules = $this->getDoctrine()
                ->getRepository(Vehicule::class)
                ->findAll();}
                else{
                    $vehicules = $this->getDoctrine()
                    ->getRepository(Vehicule::class)
                    ->findBy(['type' => $type]);
                }
        return $this->render('vehicule/backoffice.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[route('/Search/a',name:'search',methods: ['GET'])]
    function searchpsrchoix(VehiculeRepository $repo,Request $request ){
     $matricule = $request->get('mm');
     $vehicules=$repo->SearchByMatriculeOrModele($matricule);
     return $this->render('vehicule/carlist.html.twig', [
        'vehicules' => $vehicules,
    ]);
    }

    private VehiculeRepository $vehiculeRepository;
    private Pdf $pdfGenerator;
 
    public function __construct(VehiculeRepository $vehiculeRepository, Pdf $pdfGenerator)
    {
        $this->vehiculeRepository = $vehiculeRepository;
        $this->pdfGenerator = $pdfGenerator;
    }
 
    #[Route('/pdf/catalogue', name: 'pdf_catalogue', methods: ['GET'])]
    public function cataloguePdf(): Response
    {
        $imageSrc = $this->imageToBase64($this->getParameter('kernel.project_dir') . '/public/images/6431874652f40.jpg');
        $vehicules = $this->vehiculeRepository->findAll();
        $html = $this->renderView('vehicule/catalogue.html.twig', [
            'vehicules' => $vehicules,
            'imageSrc' => $imageSrc,

        ]);

        $pdfOptions = [
            'margin-top' => 10,
           'margin-right' => 10,
            'margin-bottom' => 10,
            'margin-left' => 10,
            'encoding' => 'UTF-8',
            'footer-right' => '[page]',
            'footer-font-size' => 8,
        ];

        return new Response(
            $this->pdfGenerator->getOutputFromHtml($html, $pdfOptions),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="catalogue.pdf"',
            ]
        );
    }

    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }

    function getRatings(Vehicule $vehicule,EntityManagerInterface $entityManager) {
        $ratings = $entityManager->getRepository(Rating::class)->findBy([
           'idvehicule' => $vehicule->getIdvehicule()
        ]);
        $total = count($ratings);
        $sum = 0; $perc_5stars=0; $perc_4stars=0; $perc_3stars=0; $perc_2stars=0; $perc_1stars=0;
        if ($total)  {
            $total_5_stars = count(array_filter($ratings, function ($rating) {
                return $rating->getNote() === 5;
            }));
            $perc_5stars =  floor(($total_5_stars/$total)*100);
            $total_4_stars = count(array_filter($ratings, function ($rating) {
                return $rating->getNote() === 4;
            }));
            $perc_4stars =  floor(($total_4_stars/$total)*100);
            $total_3_stars = count(array_filter($ratings, function ($rating) {
                return $rating->getNote() === 3;
            }));
            $perc_3stars =  floor(($total_3_stars/$total)*100);
            $total_2_stars = count(array_filter($ratings, function ($rating) {
                return $rating->getNote() === 2;
            }));
            $perc_2stars =  floor(($total_2_stars/$total)*100);
            $total_1_stars = count(array_filter($ratings, function ($rating) {
                return $rating->getNote() === 1;
            }));
            $perc_1stars = floor(($total_1_stars/$total)*100);
            foreach ($ratings as $rating) {
                $sum += $rating->getNote();
            }
            $sum = round($sum / $total,2) ;

        }
        return [
            'total' => $total,
            'rating' => $sum,
            'perc_5_stars' => $perc_5stars,
            'perc_4_stars' => $perc_4stars,
            'perc_3_stars' => $perc_3stars,
            'perc_2_stars' => $perc_2stars,
            'perc_1_stars' => $perc_1stars,
        ];
    }



}
