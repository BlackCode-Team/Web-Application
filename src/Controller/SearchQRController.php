<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\SearchType;
use App\Repository\UtilisateurRepository;
use App\Services\qrcodeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Mpdf\Mpdf;
class SearchQRController extends AbstractController
{
    private $qrcodeService;
    public function __construct(qrcodeService $qrcodeService)
    {
        $this->qrcodeService = $qrcodeService;
    }
    
    /**
     * @Route("/search", name="app_search_q_r")
     * @param Request $request
     * @param qrcodeService $qrcodeService
     * @return Response
     */
    public function index(Request $request, qrcodeService $qrcodeService, UtilisateurRepository $userRepository): Response
    {    
        $qrCode = null;
        $user = new Utilisateur();
        $form = $this->createForm(SearchType::class, $user);
        $form->handleRequest($request);
        

        if  ( $form->isSubmitted()&& $form->isValid()) {
            $cin = $user->getCin();
            $user = $userRepository->findOneByCin($cin);
            if ($user) {
                $qrCode = $qrcodeService->qrcode($cin);
            }
            if ($user) {
                $qrCode = $this->qrcodeService->qrcode($cin);
                $pdf = $this->generatePdf($user, $qrCode);
                return new Response($pdf, 200, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'attachment; filename="user_data.pdf"'
                ]);
            }
        }
        return $this->render('search_qr/index.html.twig', [
            'form' => $form ->createView(),
            'qrCode' => $qrCode
        ]);
    }

    /**
 * @Route("/pdf/{cin}", name="app_show_pdf")
 * @param string $cin
 * @param UtilisateurRepository $userRepository
 * @return Response
 */
public function showPdf(string $cin, UtilisateurRepository $userRepository): Response
{
    $user = $userRepository->findOneByCin($cin);
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }
    $qrCodeService = $this->get(qrcodeService::class);
    $qrCode = $qrCodeService->qrcode($cin);
    $filename= $user->getEmail();
    $pdf = $this->generatePdf($user, $qrCode);
    return new Response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="user_data.pdf"'
    ]);
}

    protected function generatePdf(Utilisateur $user, string $qrCode): string
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML('<h1>User Data</h1>');
        $mpdf->WriteHTML('<p>CIN: '.$user->getCin().'</p>');
        $mpdf->WriteHTML('<p>Name: '.$user->getNom().'</p>');
        $mpdf->WriteHTML('<p>Prenom: '.$user->getPrenom().'</p>');
        $mpdf->WriteHTML('<p>Email: '.$user->getEmail().'</p>');
        $mpdf->WriteHTML('<p>Nombre de Points: '.$user->getNbpoint().'</p>');
        $mpdf->WriteHTML('<p>Permis: '.$user->getPermis().'</p>');
        $mpdf->WriteHTML('<p>QR Code:</p>');
        $mpdf->Image($qrCode, null, null, 30, 30, '', '', true, false);
        return $mpdf->Output('', 'S');
    }
 
}
