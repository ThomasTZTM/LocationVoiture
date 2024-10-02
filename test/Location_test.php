<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Moto;
use \App\Location;
use \App\Voiture;

// On créer un moto

$moto1 = new Moto("Peugeot", "XP6", 100, 1750, "VERTAIBRE");
$voiture1 = new Voiture("Tesla", "Model 3", 800, 15, 5, "électrique");

$location1 = new Location(5, [$moto1]);
$location1->louerVehicule($voiture1);
$location1->afficherInfos();