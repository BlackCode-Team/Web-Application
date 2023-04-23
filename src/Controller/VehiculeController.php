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


#[Route('/vehicule')]
class VehiculeController extends AbstractController
{
    #[Route('/', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/list.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
    }

    #[Route('/back', name: 'app_vehicule_indexback', methods: ['GET'])]
    public function indexback(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
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
}
