<?php

class Option
{
    private $name;
    private $price;

    public function __construct( $name, $price ) 
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

}