<?php

class Drink implements IDrink {

    private $name;
    private $price;
    private $size;

    public const SIZE_SMALL = 'small';
    public const SIZE_MEDIUM = 'medium';
    public const SIZE_LARGE = 'large';

    public function __construct($name,$price,$size) {
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;

    }

    public function getTotalPrice() : float {

        switch($this->size)
        {
            case Drink::SIZE_SMALL:
                $this->price;
                break;
            case Drink::SIZE_MEDIUM: 
                $this->price * 1.3;
                break;
            case Drink::SIZE_LARGE: 
                $this->price * 1.6;
                break;
        }

        return $this->price;
    }

    public function getSize() : string {
        return $this->size;
    }

    public function getDescription() : string {
        return $this->size . " " . $this->name;
    }
}