<?php

interface IShipping
{
    public function calculateFees(int $ht) : float;
}