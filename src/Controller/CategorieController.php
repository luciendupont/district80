<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function categorie(CategorieRepository $categorieRepository): Response
    {
            $cat=$categorieRepository->findAll();
        return $this->render('categorie/index.html.twig', [
            'cats'=>$cat
        ]);
    }
}
