<?php
spl_autoload_register(function ($class) {
    //lire le dossier classes 
    //lire le dossier interfaces

    if (file_exists('classes/' . $class . '.php') == true) {
        include 'classes/' . $class . '.php';
    } else if (file_exists('interfaces/' . $class . '.php') == true) {
        include 'interfaces/' . $class . '.php';
    } else if (file_exists('classes/options/' . $class . '.php') == true) {
        include 'classes/options/' . $class . '.php';
    }
});
