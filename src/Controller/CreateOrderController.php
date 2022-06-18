<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateOrderController extends AbstractController
{
    #[Route('/create/order', name: 'app_create_order')]
    public function index(): Response
    {
        return $this->render('create_order/index.html.twig', [
            'controller_name' => 'CreateOrderController',
        ]);
    }
}
