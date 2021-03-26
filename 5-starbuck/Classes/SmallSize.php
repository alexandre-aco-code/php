<?php
// concrete decorator
class SmallSize extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        return $this->drink->getBasePrice() * 1;
    }
}
