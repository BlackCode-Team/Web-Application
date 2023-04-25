<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
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
public function index(Request $request, VehiculeRepository $vehiculeRepository, PaginatorInterface $paginator): Response
{
    $vehicules = $vehiculeRepository->findAll();
    
    $vehicules = $paginator->paginate(
        $vehicules, // Requête à paginer
        $request->query->getInt('page', 1), 6 
    );
    

    return $this->render('vehicule/carlist.html.twig', [
        'vehicules' => $vehicules,
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

    #[Route('/back', name: 'app_vehicule_indexback', methods: ['GET'])]
    public function indexback(VehiculeRepository $vehiculeRepository): Response
    {   
        $vehicules = $vehiculeRepository->findAll();
        $totalCars = $vehiculeRepository->getTotalTypeVoiture();
        $totalTrottinette = $vehiculeRepository->getTotalTypeTrottinette();
    
        // Pie chart 
       $chartData = [
    'labels' => ["Voitures", "Trottinettes"],
    'datasets' => [
        [
            'data' => [$totalCars, $totalTrottinette],
            'backgroundColor' => [
                'rgba(54, 162, 235, 0.2)',
                'rgba(149, 165, 166, 0.2)',
            ],
            'borderColor' => [
                'rgba(54, 162, 235, 1)',
                'rgba(149, 165, 166, 1)',
            ],
            'borderWidth' => 1,
        ],
    ],
];
    
        return $this->render('vehicule/index.html.twig', [
            'vehicules' =>  $vehicules,
            'chartData' => json_encode($chartData),
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
        if ($this->isCsrfTokenValid('delete'.$vehicule->getidvehicule(), $request->request->get('_token'))) {
            $vehiculeRepository->remove($vehicule, true);
        }

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }

    /*public function generatePdfCatalogueAction()
    {
        $em = $this->getDoctrine()->getManager();
        $vehicules = $em->getRepository(Vehicule::class)->findAll();

        $html = $this->renderView('vehicule/catalogue.html.twig', [
            'vehicules' => $vehicules,
        ]);

        $snappy = new Pdf('/usr/local/bin/wkhtmltopdf'); // ou utiliser l'injection de dépendances pour récupérer le service
        $filename = 'catalogue_vehicules.pdf';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }*/

   /*public function vehiculesPdf(Pdf $pdf): Response
   {
       // Récupération de la liste des véhicules depuis la base de données
       $vehicules = $this->getDoctrine()->getRepository(Vehicule::class)->findAll();

       $pdf = new Pdf();

       // Création du contenu HTML pour le PDF
       $html = $this->renderView('vehicule/catalogue.html.twig', [
           'vehicules' => $vehicules,
       ]);

       // Génération du PDF
       $pdf->setOption('encoding', 'UTF-8');

       return new Response(
           $pdf->getOutputFromHtml($html),
           200,
           [
               'Content-Type' => 'application/pdf',
               'Content-Disposition' => 'attachment; filename="liste_vehicules.pdf"',
           ]
       );
   }*/

  
   #[Route('/filtre/type', name: 'vehicule_filter' ,methods: ['GET'])]
    public function filter(Request $request)
    {
        $type = $request->query->get('type');

        $vehicules = $this->getDoctrine()
            ->getRepository(Vehicule::class)
            ->findBy(['type' => $type]);
        return $this->render('vehicule/carlist.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    private VehiculeRepository $vehiculeRepository;
    // private Pdf $pdfGenerator;
 
    public function __construct(VehiculeRepository $vehiculeRepository/*, Pdf $pdfGenerator*/)
    {
        $this->vehiculeRepository = $vehiculeRepository;
        // $this->pdfGenerator = $pdfGenerator;
    }
 
//    #[Route('/pdf/catalogue', name: 'pdf_catalogue', methods: ['GET'])]
//    public function cataloguePdf(): Response
//    {
//        $vehicules = $this->vehiculeRepository->findAll();
//        $html = $this->renderView('vehicule/catalogue.html.twig', [
//            'vehicules' => $vehicules,
//        ]);

//        $pdfOptions = [
//            'margin-top' => 10,
//            'margin-right' => 10,
//            'margin-bottom' => 10,
//            'margin-left' => 10,
//            'encoding' => 'UTF-8',
//            'footer-right' => '[page]',
//            'footer-font-size' => 8,
//        ];

//        return new Response(
//            $this->pdfGenerator->getOutputFromHtml($html, $pdfOptions),
//            200,
//            [
//                'Content-Type' => 'application/pdf',
//                'Content-Disposition' => 'inline; filename="catalogue.pdf"',
//            ]
//        );
//    }

}
