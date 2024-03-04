<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateBlogController extends AbstractController
{
    #[Route('/create/blog', name: 'app_create_blog')]
    public function index(): Response
    {
        return $this->render('create_blog/index.html.twig', [
            'controller_name' => 'CreateBlogController',
        ]);
    }
}
