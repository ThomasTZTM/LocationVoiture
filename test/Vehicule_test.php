<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Vehicule;

// On créer un vehicule

$vehicule1 = new Vehicule("Ford", "Fiesta", 820, 1750);
$vehicule1->afficherInfos();
echo PHP_EOL;
$nbj = 5;
echo "Le prix pour $nbj jours est de : ".$vehicule1->calculerCoutLocation($nbj)."€.";