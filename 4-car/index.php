<?php

include 'classes/Car.php';
include 'classes/Option.php';

$citroen = new Car('Citroen',10000);

echo $citroen->getTotalPrice().'<br>';

$tesla = new Car('Tesla',60000);
$tesla->addOption(new Option('ABS', 3000));
$tesla->addOption(new Option('Couleur', 1000));

echo $tesla->getTotalPrice() . '<br>';