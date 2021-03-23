<?php

class Cart
{
    private $orders;
    private $shippingFee;
    private $storage;

    public function __construct()
    {
        $this->orders = [];
        $this->shippingFee = 5;
        $this->storage = new Session();
    }

    public function addToCart(Product $product, int $quantity): void
    {
        $order = new ProductOrder($product, $quantity);
        $this->orders[] = $order;

        var_dump($this->orders);
    }
}
