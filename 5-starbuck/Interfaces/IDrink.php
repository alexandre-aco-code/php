<?php

interface IDrink
{
    function getTotalPrice(): float;
    function getBasePrice(): float;
    function getSize(): string;
    function getDescription(): string;
}
