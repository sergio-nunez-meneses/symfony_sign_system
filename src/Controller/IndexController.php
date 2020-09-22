<?php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $products = $this->getDoctrine()->getRepository(Products::class)->findAll();
        
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'current_page' => 'index',
            'products' => $products
        ]);
    }
}
