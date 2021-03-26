<?php
// concrete decorator
class BigSize extends BaseDrinkOption
{
    public function getTotalPrice(): float
    {
        return $this->drink->getBasePrice() * 1.6;
    }
}
