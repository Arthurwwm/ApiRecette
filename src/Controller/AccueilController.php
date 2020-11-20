<?php

namespace App\Controller;

use App\Entity\Recette;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $repo=$em->getRepository(Recette::class);
        $result = $repo -> findAll(); 
        $recettes = array_rand($result, 4);
        return $this->render('accueil/index.html.twig', [
            'recettes' => $recettes,
        ]);
    }
}
