<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlatController extends AbstractController
{
    #[Route('/plat', name: 'app_plat')]
    public function plat(PlatRepository $platRepository,  PaginatorInterface $paginator, Request $request): Response
    {
        $plat = $paginator->paginate(
            $platRepository->findAll(),
            $request->query->getInt('page', 1),
            7
        );
        return $this->render('plat/index.html.twig', [
         'plats'=>$plat
        ]);
    }
}
