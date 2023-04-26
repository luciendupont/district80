<?php
 
namespace App\Controller;
 
use Stripe;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
class StripeController extends AbstractController
{
    #[Route('/stripe/{id}', name: 'app_stripe')]
    public function index(Commande $commande): Response
    {
        return $this->render('stripe/index.html.twig', [
            'stripe_key' => "pk_test_51N0iZNFPaCkpFiEQIRkmwkEx6UCjr8m8s0LcjS3EcmQgFWKtdAz1oPVQMe8WutgffPIDLBQGRszwqnsmDvqZqZKY00Yub5vCGv",
                'commande'=>$commande
        
        ]);
    }
 
 
    #[Route('/stripe/create-charge', name: 'app_stripe_charge', methods: ['POST'])]
    public function createCharge(Request $request)
    {
        Stripe\Stripe::setApiKey("sk_test_51N0iZNFPaCkpFiEQttCloECeEN4D0G0JTO4KQgQuyGRFYWmqvRxMIFWepPVZaQnIklKcYIeqW6k61mDCvqgZomwl00wEVu0pyy");
        Stripe\Charge::create ([
                "amount" => 5 * 100,
                "currency" => "fr",
                "source" => $request->request->get('stripeToken'),
                "description" => "Binaryboxtuts Payment Test"
        ]);
        $this->addFlash(
            'success',
            'Payment Successful!'
        );
        return $this->redirectToRoute('app_stripe', [], Response::HTTP_SEE_OTHER);
    }
}