<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Voiture;

// On créer un voiture

$voiture1 = new Voiture("Tesla", "Model 3", 800, 15, 5, "électrique");
$voiture1->afficherInfos();
echo PHP_EOL;
$nbj = 5;
echo "Le prix pour $nbj jours est de : ".$voiture1->calculerCoutLocation($nbj)."€.";