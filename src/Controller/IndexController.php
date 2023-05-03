<?php

namespace App\Controller;

use App\Form\RechercheType;
use App\Repository\PlatRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    #[Route('/' ,name: 'app_index')]
    public function index(CategorieRepository $catRepository,PlatRepository $platRepository,Request $request): Response
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

        $form = $this->createForm(RechercheType::class);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $recherche = $form->getData();
 
            if($catRepository->findOneBy(['libelle' => $recherche])){ 
                $categorie = $catRepository->findOneBy(['libelle' => $recherche]);
                return $this->redirectToRoute('app_catplat', ['categorie' => $categorie->getId()]);
            }

            if($platRepository->findOneBy(['libelle' => $recherche])){ 
                $plat = $platRepository->findOneBy(['libelle' => $recherche]);
                return $this->redirectToRoute('app_detailplat', ['plat' => $plat->getId()]);
            }
        };

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
          'form'=>$form->createView(),
        ]);
    }
    
}
