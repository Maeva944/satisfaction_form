<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireController extends AbstractController
{
    #[Route('/formulaire', name: 'formulaire_index')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'form' => 'FormulaireController',
        ]);
    }
}

?>