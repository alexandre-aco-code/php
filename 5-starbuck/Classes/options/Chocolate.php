<?php
// concrete decorator
class Chocolate extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        switch($this->drink->getSize())
        {
            case Drink::SIZE_SMALL:
                return $this->drink->getTotalPrice() + 1.5;
                break;
            case Drink::SIZE_MEDIUM:
                return $this->drink->getTotalPrice() + 2.1;
                break;
            case Drink::SIZE_LARGE:
                return $this->drink->getTotalPrice() + 2.6;
                break;
        }
    }
    public function getDescription(): string
    {
        return $this->drink->getDescription() . " avec Chocolat";
    }
}
