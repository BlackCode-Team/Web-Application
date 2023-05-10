<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\Utilisateur1Type;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/utilisateur')]
class UtilisateurController extends AbstractController
{
    #[Route('/', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateurs = $utilisateurRepository->findBy(['role' => 'agent']);

        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }


    #[Route('/new', name: 'app_utilisateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(Utilisateur1Type::class, $utilisateur);
        #$form->get('role')->setData('agent');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur ajouté avec succés!');
            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{iduser}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {   
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{iduser}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Utilisateur1Type::class, $utilisateur);
        $form->handleRequest($request);
        #$form->get('role')->setData('agent');

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur mise à jour avec succés!');
            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{iduser}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getIduser(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur, true);
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

    /////////////////////json
    #[Route('/jsonall', name: 'app_user_json', methods: ['GET'])]
    public function jsonindex(UtilisateurRepository $userRepository, SerializerInterface $serializer): Response
    {
        $parks = $userRepository->findAll();
        
        // Debugging statement - check the number of parks returned by the query
        dump(count($parks));
        
        $json = $serializer->serialize($parks, 'json', ['Groups' => 'users']);
        
        // Debugging statement - check the content of $parksNormalises
        dump($json);
    
        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
    ////////////////////////////////////////////////////////////////////
    #[Route("/{iduser}/recjson", name: "recupjsonuser")]
    public function userId(int $iduser, NormalizerInterface $normalizer, SerializerInterface $serializer, EntityManagerInterface $entityManager)
    {
        $UtilisateurRepository = $entityManager->getRepository(Park::class);
        dump($iduser);
        $user = $UtilisateurRepository->find($iduser);
        $json = $serializer->serialize($user, 'json', ['Groups' => 'users']);
        dump($json); 
        return new Response($json, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    ///////////////////////////////////////////////////////
    #[Route("/adduserJSON/new", name: "adduserJSON")]
    public function adduserJSON(Request $req,   NormalizerInterface $Normalizer, SerializerInterface $serializer)
    {

        $em = $this->getDoctrine()->getManager();
        $user = new Utilisateur();
        $user->setNom($req->get('nom'));
        $user->setPrenom($req->get('prenom'));
        $user->setEmail($req->get('email'));
        $user->setCin($req->get('cin'));
        $user->setPermis($req->get('permis'));
        $em->persist($user);
        $em->flush();


            $json = $serializer->serialize($user, 'json', ['Groups' => 'users']);

            return new Response($json, 200, [
                'Content-Type' => 'application/json'
            ]);
    }


    //////////////////////////////////////////////////////////delete
    #[Route("/deleteusersJSON/{id}", name: "deleteusersJSON")]
    public function deleteusersJSON(Request $req,int $id, NormalizerInterface $Normalizer, SerializerInterface $serializer)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Utilisateur::class)->find($id);
        $em->remove($user);
        $em->flush();
        
        $jsonContent = $serializer->serialize($user, 'json', ['Groups' => 'users']);
        return new Response("user deleted successfully " . json_encode($jsonContent));
    }

///////////////////////////////////////////////////////update 
#[Route("/updateuserJSON/{id}", name: "updateuserJSON")]
public function updateuserJSON(Request $req, $id, NormalizerInterface $Normalizer, SerializerInterface $serializer)
{

    
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository(Utilisateur::class)->find($id);
        $user->setNom($req->get('nom'));
        $user->setPrenom($req->get('prenom'));
        $user->setEmail($req->get('email'));
        $user->setCin($req->get('cin'));
        $user->setPermis($req->get('permis'));
        

        $em->flush();
    $jsonContent = $serializer->serialize($user, 'json', ['Groups' => 'users']);
    return new Response("user updated successfully " . json_encode($jsonContent));
}






















}
