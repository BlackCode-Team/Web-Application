<?php

namespace App\Controller;

use App\Entity\Maintenance;
use App\Form\MaintenanceType;
use App\Repository\MaintenanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/maintenance')]
class MaintenanceController extends AbstractController
{
    #[Route('/', name: 'app_maintenance_index', methods: ['GET'])]
    public function index(Request $request,MaintenanceRepository $maintenanceRepository,PaginatorInterface $paginator): Response
    {
        $maintenances=$maintenanceRepository->findAll();
        $maintenances = $paginator->paginate(
            $maintenances,
            $request->query->getInt('page', 1), 3
        );
        return $this->render('maintenance/index.html.twig', [
            'maintenances' => $maintenances,
        ]);
    }

    public function prePersist()
{
    $this->idvehicule->setstatus("non disponible");
    sleep(3600);
    $this->idvehicule->setstatus("disponible");
}
    #[Route('/new', name: 'app_maintenance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MaintenanceRepository $maintenanceRepository): Response
    {
        $maintenance = new Maintenance();
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $maintenance->setDatedebut(new \DateTime());

            $idvehicule = $maintenance->getVehicule();
            $idvehicule->setStatus('non disponible');
            $em = $this->getDoctrine()->getManager();
            $em->persist($maintenance);
            $em->flush();
            sleep(3600);
            $idvehicule->setStatus('disponible');
            $em->flush();
            return $this->redirectToRoute('app_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maintenance/new.html.twig', [
            'maintenance' => $maintenance,
            'form' => $form,
        ]);
    }

    #[Route('/{idmaintenance}', name: 'app_maintenance_show', methods: ['GET'])]
    public function show(Maintenance $maintenance): Response
    {
        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
        ]);
    }

    #[Route('/{idmaintenance}/edit', name: 'app_maintenance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Maintenance $maintenance, MaintenanceRepository $maintenanceRepository): Response
    {
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $maintenanceRepository->save($maintenance, true);

            return $this->redirectToRoute('app_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maintenance/edit.html.twig', [
            'maintenance' => $maintenance,
            'form' => $form,
        ]);
    }

    #[Route('/{idmaintenance}', name: 'app_maintenance_delete', methods: ['POST'])]
    public function delete(Request $request, Maintenance $maintenance, MaintenanceRepository $maintenanceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maintenance->getIdmaintenance(), $request->request->get('_token'))) {
            $maintenanceRepository->remove($maintenance, true);
        }

        return $this->redirectToRoute('app_maintenance_index', [], Response::HTTP_SEE_OTHER);
    }
}
