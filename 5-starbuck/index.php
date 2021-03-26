<?php

include 'includes/autoload.php';

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

