<?php

namespace App;

class Moto extends Vehicule
{
    protected string $type_guidon;

    public function __construct(string $marque, string $modele, int $vitesse_max, float $prix_journalier, string $type_guidon){
        parent::__construct($marque, $modele, $vitesse_max, $prix_journalier);
        $this->type_guidon = $type_guidon;
    }

    public function getTypeCarburant(): string
    {
        return $this->type_guidon;
    }

    public function setTypeCarburant(string $type_carburant): void
    {
        $this->type_guidon = $type_carburant;
    }



    public function afficherInfos() : void
    {
        echo "La $this->marque $this->modele avec un guidon du type $this->type_guidon qui va à $this->vitesse_max km/h, est afficher au prix de $this->prix_journalier par jour";
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        if ($nbJours > 7){
            $resultat = ($this->prix_journalier * $nbJours)*0.95;
        }else{
            $resultat = $this->prix_journalier * $nbJours;
        }
        return $resultat;
    }

}

