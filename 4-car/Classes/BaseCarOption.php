<?php

abstract class BaseCarOption implements ICar
{
    protected $car;

    public function __construct(ICar $car)
    {
        $this->car = $car;
    }

    public function getBasePrice(): float
    {
        return $this->car->getBasePrice();
    }

    public abstract function getTotalPrice(): float;
}
