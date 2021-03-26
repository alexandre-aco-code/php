<?php

spl_autoload_register(function ($class) {
    // lire le dossier classes 
    // lire le dossier interfaces
    if (file_exists('classes/' . $class . '.php') == true)
        include 'classes/' . $class . '.php';
    else if (file_exists('interfaces/' . $class . '.php') == true)
        include 'interfaces/' . $class . '.php';
});

$EspressoMedium = new Drink('Espresso',1.20, 'medium');
// $Chocolat = new Drink('Chocolat',2.10, 'medium');
// $The = new Drink('Thé',1.70, 'large');

echo "<br>" . $EspressoMedium->getTotalPrice();
echo "<br>" . $EspressoMedium->getDescription();

$EspressoMediumWithCream = new Cream($EspressoMedium);

echo "<br>" . $EspressoMediumWithCream->getTotalPrice();
echo "<br>" . $EspressoMediumWithCream->getDescription();

$EspressoMediumWithChocolate = new Chocolate($EspressoMedium);

echo "<br>" . $EspressoMediumWithChocolate->getTotalPrice();
echo "<br>" . $EspressoMediumWithChocolate->getDescription();

$EspressoMediumWithCreamWithChocolate = new Chocolate($EspressoMediumWithCream);

echo "<br>" . $EspressoMediumWithCreamWithChocolate->getTotalPrice();
echo "<br>" . $EspressoMediumWithCreamWithChocolate->getDescription();

