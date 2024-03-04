<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeManagerController extends AbstractController
{
    #[Route('/home/manager', name: 'app_home_manager')]
    public function index(): Response
    {
        return $this->render('home_manager/index.html.twig', [
            'controller_name' => 'HomeManagerController',
        ]);
    }
}
