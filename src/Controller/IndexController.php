<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(CategorieRepository $catRepository,PlatRepository $platRepository): Response
    {
        $cat=$catRepository->findAll();
        $plat=$platRepository->findAll();
        return $this->render('index/index.html.twig', [
          'cats'=>$cat,'plats'=>$plat
        ]);
    }
}
