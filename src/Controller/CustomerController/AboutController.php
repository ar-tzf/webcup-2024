<?php 

namespace App\Controller\CustomerController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'about')]
    public function number(): Response
    {
        return $this->render('customer/about.html.twig', []);
    }
}

?>