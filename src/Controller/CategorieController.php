<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function categorie(CategorieRepository $categoriripo,  PaginatorInterface $paginator, Request $request): Response
    {
        $cat = $paginator->paginate(
            $categoriripo->findAll(),
            $request->query->getInt('page', 1),
            7
        );
        return $this->render('categorie/index.html.twig', [
            'cats'=>$cat
        ]);
    }


    
}