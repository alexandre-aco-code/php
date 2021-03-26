<?php

interface IDrink
{
    function getTotalPrice(): float;
    function getSize(): string;
    function getDescription(): string;
}
