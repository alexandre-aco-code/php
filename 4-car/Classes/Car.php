<?php

class Car
{
    private $price;
    private $name;
    private $options;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->options = [];
    }

    public function addOption( Option $option ) 
    {
        $this->options[] = $option;
    }

    public function getTotalPrice() : float 
    {
        $result = $this->price;

        foreach ($this->options as $option )
        {
            $result += $option->getPrice();
        }
        return $result;
    }


}
