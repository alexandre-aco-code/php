<?php

class Product {
    private $name;
    private $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function display() : void {
        // echo "<p> {$this->name} </p>";
        // echo "<p> {$this->price} </p>";
        echo "<li> {$this->name} - {$this->price} € </li>";
    }

    public function getName() {
        return $this->name;
    }
}