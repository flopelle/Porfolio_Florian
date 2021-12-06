<?php

namespace App\Controller;

use App\Repository\AccueilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AccueilRepository $AccueilRepository): Response
    {
        return $this->render('accueil/index.html.twig', [
            'Accueil' => 'AccueilController'
        ]);
    }
}
