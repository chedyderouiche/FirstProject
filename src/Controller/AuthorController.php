<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author/{name}', name: 'app_author_show')]
    public function showAuthor(string $name): Response
    {
        // On envoie la variable "name" au template Twig
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }
}