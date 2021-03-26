<?php
// concrete decorator
class GPSOption extends BaseCarOption
{
    public function getTotalPrice(): float
    {
        return $this->car->getTotalPrice()  + 3000;
    }
}
