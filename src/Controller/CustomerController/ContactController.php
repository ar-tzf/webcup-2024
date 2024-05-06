<?php 

namespace App\Controller\CustomerController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function number(): Response
    {
        return $this->render('customer/contact.html.twig', []);
    }
}

?>