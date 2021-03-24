<?php

interface IStorage
{
    function saveCart(array $products): void;
    function loadCart(): array;
    function clearCart(): void;
}
