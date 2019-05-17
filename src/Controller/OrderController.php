<?php
// src/Controller/OrderController.php
namespace App\Controller;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends AbstractController
{
    /**
      * @Route("/order/index")
    */
    public function index()
    {
        $order = new Order();
        $order->setOrderId('');
        $order->setOrderTax('');
        $order->setMarketplace('');
        $order->setIdFlux('');

        $form = $this->createFormBuilder($order)
            ->add('orderId', TextType::class)
            ->add('orderAmount', IntegerType::class)
            ->add('orderTax', IntegerType::class)
            ->add('marketPlace', TextType::class)
            ->add('idFlux', IntegerType::class)
            ->add('save', SubmitType::class, ['label' => 'Créer une nouvelle commande'])
           ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $order = $form->getData();

        return $this->redirectToRoute('order_success');
    }

    return $this->render('order/index.html.twig', [
        'form' => $form->createView(),
    ]);
    }
}