<?php
// concrete decorator
class Chantilly extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        if ($this->drink->getSize() == 'small') return $this->drink->getTotalPrice() + 1;
        if ($this->drink->getSize() == 'medium') return $this->drink->getTotalPrice() + 1.5;
        if ($this->drink->getSize() == 'large') return $this->drink->getTotalPrice() + 2;
    }
    public function getDescription(): string
    {
        return $this->drink->getDescription() . " à la  Chantilly";
    }
}
