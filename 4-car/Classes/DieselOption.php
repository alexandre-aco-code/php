<?php

class DieselOption extends BaseCarOption
{
    public function getTotalPrice(): float
    {
        //return $this->car->getBasePrice()  * 1.1;
        return $this->car->getTotalPrice() + $this->car->getBasePrice()  * 0.1;
    }
}
