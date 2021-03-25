<?php

class Shipping implements IShipping
{

    public function calculateFees(int $ht): float
    {

        if ($ht < 50) {
            return 20;
        } elseif ($ht > 50 && $ht < 100) {
            return 10;
        } elseif ($ht > 100 && $ht < 1000) {
            return 0.05 * ($ht);
        } elseif ($ht > 1000) {
            return 0;
        } else {
            throw new Error("erreur total panier");
        }
    }
}
