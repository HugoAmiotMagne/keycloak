<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Legume;
use App\Entity\Fruit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    #[Route('/p', name: 'produit')]
    public function products(): Response
    {
        
        $produits = $this->entityManager->getRepository(Produit::class)->findAll();
            
        return $this->render('produit/index.html.twig', [
            'produits' => $produits, 
        ]);
    }

    #[Route('/l', name: 'legumes')]
    public function listLegumes(): Response
    {
        
        $legumes = $this->entityManager->getRepository(Legume::class)->findAll();

        return $this->render('produit/list_legumes.html.twig', [
            'legumes' => $legumes,
        ]);
    }

    #[Route('/f', name: 'fruits')]
    public function listFruits(): Response
    {
        
        $fruits = $this->entityManager->getRepository(Fruit::class)->findAll();

        return $this->render('produit/list_fruits.html.twig', [
            'fruits' => $fruits,
        ]);
    }
}
