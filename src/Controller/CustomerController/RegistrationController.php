<?php 

namespace App\Controller\CustomerController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'registration')]
    public function number(): Response
    {
        return $this->render('customer/registration.html.twig', []);
    }
}

?>