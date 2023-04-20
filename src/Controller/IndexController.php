<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/' ,name: 'app_index')]
    public function index(CategorieRepository $catRepository,PlatRepository $platRepository): Response
    {
        $cat=$catRepository->find(1);
        $cat1=$catRepository->find(2);
        $cat2=$catRepository->find(3);
        $cat3=$catRepository->find(4);
        $cat4=$catRepository->find(5);
        $cat5=$catRepository->find(7);
        $plat=$platRepository->find(1);
        $plat1=$platRepository->find(4);
        $plat2=$platRepository->find(7);
        $plat3=$platRepository->find(9);
        $plat4=$platRepository->find(10);

        return $this->render('index/index.html.twig', [
          'cats'=>$cat,
          'cats1'=>$cat1,
          'cats2'=>$cat2,
          'cats3'=>$cat3,
          'cats4'=>$cat4,
          'cats5'=>$cat5,
          'plats'=>$plat,
          'plats1'=>$plat1,
          'plats2'=>$plat2,
          'plats3'=>$plat3,
          'plats4'=>$plat4,

        ]);
    }
}
