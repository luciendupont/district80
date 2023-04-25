<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Repository\CategorieRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function categorie(CategorieRepository $categoriripo,  PaginatorInterface $paginator, Request $request): Response
    {
        $cat = $paginator->paginate(
            $categoriripo->findAll(),
            $request->query->getInt('page', 1),
            4
        );
        return $this->render('categorie/index.html.twig', [
            'cats'=>$cat
        ]);
    }

    #[Route('/categorie/{categorie}',name:'app_catplat')]
    public function liste(Categorie $categorie): Response
    {
        return $this->render('categorie/list.html.twig', [
            'cat' => $categorie
            
        ]);
    }

    
}
