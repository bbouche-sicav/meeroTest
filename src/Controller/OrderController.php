<?php
// src/Controller/OrderController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    /**
      * @Route("/order/index")
    */
    public function index()
    {

        return $this->render('order/index.html.twig', [
        ]);
    }
}