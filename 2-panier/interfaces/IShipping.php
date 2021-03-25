<?php

interface IShipping
{
    function calculateFees(int $ht) : float;
}