<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Moto;

// On créer un moto

$moto1 = new Moto("Peugeot", "XP6", 100, 1750, "VERTAIBRE");
$moto1->afficherInfos();
echo PHP_EOL;
$nbj = 5;
echo "Le prix pour $nbj jours est de : ".$moto1->calculerCoutLocation($nbj)."€.";