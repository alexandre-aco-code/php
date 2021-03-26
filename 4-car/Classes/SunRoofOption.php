<?php

class SunRoofOption extends BaseCarOption
{
    public function getTotalPrice(): float
    {
        return $this->car->getTotalPrice() * 1.05 + 1000;
    }
}
