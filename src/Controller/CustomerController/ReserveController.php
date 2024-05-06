<?php 

namespace App\Controller\CustomerController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReserveController extends AbstractController
{
    #[Route('/reserve', name: 'reserve')]
    public function number(): Response
    {
        return $this->render('customer/reserve.html.twig', []);
    }
}

?>