<?php

class Drink implements IDrink {

    protected $name;
    protected $price;
    protected $size;
    protected $topping;

    public function __construct($name,$price) {
        $this->name = $name;
        $this->price = $price;

    }

    public function getBasePrice() : float {
        return $this->price;
    }

    public function getTotalPrice() : float {
        return $this->price;
    }
}