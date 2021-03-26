<?php

spl_autoload_register(function ($class) {
    // lire le dossier classes 
    // lire le dossier interfaces
    if (file_exists('classes/' . $class . '.php') == true)
        include 'classes/' . $class . '.php';
    else if (file_exists('interfaces/' . $class . '.php') == true)
        include 'interfaces/' . $class . '.php';
});


$citroen = new Car('Citroen', 10000);

$car2 = new Car('Tesla', 60000);

/*

	echo $citroen->getTotalPrice().'<br>';

	$tesla = new Car('Tesla',60000);
	$tesla->addOption(new Option('ABS', 3000));
	$tesla->addOption(new Option('Couleur', 1000));
	$tesla->addOption(new Option('Gasoil', 0));

	echo $tesla->getTotalPrice().'<br>';*/

$gps = new GPSOption(new Car('Citroen', 10000));
echo $gps->getTotalPrice();

$tesla = new DieselOption($car2);
echo '<br>' . $tesla->getTotalPrice();

$teslaGPS = new GPSOption($tesla);
echo '<br>' . $teslaGPS->getTotalPrice();

$teslaWithSunRoof = new SunRoofOption($teslaGPS);
echo '<br>' . $teslaWithSunRoof->getTotalPrice();

$tesla2 = new GPSOption($car2);
echo '<br>' . $tesla2->getTotalPrice();
$tesla2 = new DieselOption($tesla2);
echo '<br>' . $tesla2->getTotalPrice();
