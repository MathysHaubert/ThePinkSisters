<?php

namespace App\Controller\Public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoryController extends AbstractController
{
    #[Route('/history', name: 'app_our_history')]
    public function index(): Response
    {
        return $this->render('history/index.html.twig', [
            'controller_name' => 'HistoryController',
        ]);
    }
}
