<?php

class ProductOrder
{
    // encapsulation
    
    // bonne pratique, mettre en private au départ ensuite passer en public

    public $product;
    private $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    //YAGNI You aren't gonna need IT

    // public function setQuantity {}

    public function addQuantity(int $quantity): void
    {
        $this->quantity += $quantity;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getTotal(): float
    {
        return $this->quantity * $this->product->getPrice();
    }

    public function display(): void
    {
    }
}
