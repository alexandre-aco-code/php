<?php
// concrete decorator
class Cream extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        return $this->drink->getTotalPrice() + 0.10;
    }
    public function getDescription(): string
    {
        return $this->drink->getDescription() . " avec Crème";
    }
}
