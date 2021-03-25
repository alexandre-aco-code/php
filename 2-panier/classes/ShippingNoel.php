<?php

class ShippingNoel implements IShipping
{

    public function calculateFees($ht): float
    {

        if ($ht < 50) {
            return 10;
        } elseif ($ht > 50 && $ht < 100) {
            return 20;
        } elseif ($ht > 100 && $ht < 1000) {
            return 0.01 * ($ht);
        } elseif ($ht > 1000) {
            return 0;
        } else {
            throw new Error("erreur total panier");
        }
    }
}
