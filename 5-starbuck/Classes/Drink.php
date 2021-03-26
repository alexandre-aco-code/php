<?php

class Drink implements IDrink {

    public $name;
    public $price;
    public $size;

    public function __construct($name,$price,$size) {
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;

    }

    public function getBasePrice() : float {
        if ($this->size == 'small') return $this->price;
        if ($this->size == 'medium') return $this->price*1.3;
        if ($this->size == 'large') return $this->price*1.6;
    }

    public function getTotalPrice() : float {

        if ($this->size == 'small') return $this->price;
        if ($this->size == 'medium') return $this->price * 1.3;
        if ($this->size == 'large') return $this->price * 1.6;
    }

    public function getSize() : string {
        return $this->size;
    }

    public function getDescription() : string {
        return $this->size . " " . $this->name;
    }
}