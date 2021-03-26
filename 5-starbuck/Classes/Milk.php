<?php
// concrete decorator
class Milk extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        return $this->drink->getTotalPrice() + 0.20;
    }
    public function getDescription(): string
    {
        return $this->drink->getDescription() . " avec lait";
    }
}
