<?php

namespace App\Controller;

use App\Entity\Detail;
use App\Entity\Commande;
use App\Service\CartService;
use App\Service\MailService;
use App\Repository\PlatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    #[Route('/mon-panier', name: 'cart')]
    public function index(CartService $carteService,PlatRepository $platRepository): Response
    {
        return $this->render('cart/index.html.twig', [
            'cart' => $carteService->getTotal()
        ]);
    }

    #[Route('/mon-panier/add/{id<\d+>}', name: 'cart_add')]
    public function addToRoute(CartService $carteService, int $id): Response
    {
        $carteService->addToCart($id);
        return $this->redirectToRoute('cart');
    }

    #[Route('/mon-panier/remove/{id<\d+>}', name: 'cart_remove')]
    public function removeToCart(CartService $carteService, int $id): Response
    {
        $carteService->removeToCart($id);
        return $this->redirectToRoute('cart');
    }

    #[Route('/mon-panier/decrease/{id<\d+>}', name: 'cart_decrease')]

    public function decrease(CartService $cartService, int $id): RedirectResponse
    {
        $cartService->decrease($id);
        return $this->redirectToRoute('cart');
    }

    #[Route('/mon-panier/removeAll', name: 'cart_removeAll')]
    public function removeAll(CartService $carteService): Response
    {
        $carteService->removeCartAll();
        return $this->redirectToRoute('cart');
    }
}
