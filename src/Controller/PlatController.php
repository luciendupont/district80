<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlatController extends AbstractController
{
    #[Route('/plat', name: 'app_plat')]
    public function plat(PlatRepository $platRepository): Response
    {
        $plat=$platRepository->findAll();
        return $this->render('plat/index.html.twig', [
         'plats'=>$plat
        ]);
    }
}
