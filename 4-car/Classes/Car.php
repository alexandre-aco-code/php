<?php

class Car implements ICar
{
    protected $price;
    private $name;
    private $options;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }



    public function getBasePrice(): float
    {
        return $this->price;
    }

    public function getTotalPrice(): float
    {
        $result = $this->price;

        return $result;
    }
}
