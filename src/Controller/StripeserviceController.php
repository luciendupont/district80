<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StripeserviceController extends AbstractController
{
    #[Route('/stripeservice', name: 'app_stripeservice')]
    public function index(): Response
    {
        return $this->render('stripeservice/index.html.twig', [
            'controller_name' => 'StripeserviceController',
        ]);
    }
}
