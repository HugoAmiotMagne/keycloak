<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\KernelInterface;

class HomeController extends AbstractController
{
    #[Route('/h', name: 'home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig');
    }

}
