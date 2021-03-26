<?php

spl_autoload_register(function ($class) {
    // lire le dossier classes 
    // lire le dossier interfaces
    if (file_exists('classes/' . $class . '.php') == true)
        include 'classes/' . $class . '.php';
    else if (file_exists('interfaces/' . $class . '.php') == true)
        include 'interfaces/' . $class . '.php';
});

$Espresso = new Drink('Espresso',1.20);
$Chocolat = new Drink('Chocolat',2.10);
$The = new Drink('Thé',1.70);

echo $Espresso->getTotalPrice();

// var_dump("<br>" . $Espresso->getTotalPrice());

$EspressoBig = new BigSize( $Espresso );
echo "<br>" . $EspressoBig->getTotalPrice();