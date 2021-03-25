<?php

class ShippingConfinement implements IShipping
{

    public function calculateFees($ht): float
    {

        if ($ht < 50) {
            return 10;
        } elseif ($ht > 50) {
            return 0;
        } else {
            throw new Error("erreur total panier");
        }
    }
}
