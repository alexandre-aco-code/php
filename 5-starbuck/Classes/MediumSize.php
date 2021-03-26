<?php
// concrete decorator
class MediumSize extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        return $this->drink->getBasePrice() * 1.3;
    }
}
