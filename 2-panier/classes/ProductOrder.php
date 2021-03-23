<?php

class ProductOrder {

    private $productName;
    private $quantity;

    public function __construct($productName, $quantity) {

        $this->productName = $productName;
        $this->quantity = $quantity;

    } 

    public function display() {
        echo " {$this->productName} - {$this->quantity} ";
    }
}