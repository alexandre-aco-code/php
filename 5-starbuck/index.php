<?php

include 'includes/autoload.php';

$EspressoMedium = new Drink('Espresso',1.20, Drink::SIZE_MEDIUM);

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


$Chocolat = new Drink('Chocolat',2.10, Drink::SIZE_SMALL);
echo "<br>" . $Chocolat->getTotalPrice();
echo "<br>" . $Chocolat->getDescription();

$ChocolatWithCreamWithMilkWithChantillyWithChocolate = new Chocolate ( new Chantilly ( new Milk ( new Cream ( $Chocolat ))));
echo "<br>" . $ChocolatWithCreamWithMilkWithChantillyWithChocolate->getTotalPrice();
echo "<br>" . $ChocolatWithCreamWithMilkWithChantillyWithChocolate->getDescription();





