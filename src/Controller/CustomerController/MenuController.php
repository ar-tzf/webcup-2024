<?php 

namespace App\Controller\CustomerController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function number(): Response
    {
        return $this->render('customer/menu.html.twig', []);
    }
}

?>