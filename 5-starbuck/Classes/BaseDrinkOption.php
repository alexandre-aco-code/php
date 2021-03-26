<?php

abstract class BaseDrinkOption implements IDrink {

    protected $drink;

    public function __construct(IDrink $drink)
    {
        $this->drink = $drink;
    }

    public function getBasePrice(): float
    {
        return $this->drink->getBasePrice();
    }

    abstract public function getTotalPrice() : float;

    abstract public function getDescription() : string;

    public function getSize(): string 
    {
        return $this->drink->getSize();
    }



}