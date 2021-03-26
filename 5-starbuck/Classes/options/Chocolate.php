<?php
// concrete decorator
class Chocolate extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        if ($this->drink->getSize() == 'small') return $this->drink->getTotalPrice() + 1.5;
        if ($this->drink->getSize() == 'medium') return $this->drink->getTotalPrice() + 2.1;
        if ($this->drink->getSize() == 'large') return $this->drink->getTotalPrice() + 2.6;
    }
    public function getDescription(): string
    {
        return $this->drink->getDescription() . " avec Chocolat";
    }
}
