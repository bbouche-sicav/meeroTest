<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $order_id;

    /**
     * @ORM\Column(type="float")
     */
    private $order_amount;

    /**
     * @ORM\Column(type="float")
     */
    private $order_tax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marketplace;

    /**
     * @ORM\Column(type="integer")
     */
    private $idFlux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderId(): ?string
    {
        return $this->order_id;
    }

    public function setOrderId(string $order_id): self
    {
        $this->order_id = $order_id;

        return $this;
    }

    public function getOrderAmount(): ?float
    {
        return $this->order_amount;
    }

    public function setOrderAmount(float $order_amount): self
    {
        $this->order_amount = $order_amount;

        return $this;
    }

    public function getOrderTax(): ?float
    {
        return $this->order_tax;
    }

    public function setOrderTax(float $order_tax): self
    {
        $this->order_tax = $order_tax;

        return $this;
    }

    public function getMarketplace(): ?string
    {
        return $this->marketplace;
    }

    public function setMarketplace(?string $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getIdFlux(): ?int
    {
        return $this->idFlux;
    }

    public function setIdFlux(int $idFlux): self
    {
        $this->idFlux = $idFlux;

        return $this;
    }
}
