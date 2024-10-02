<?php

namespace App;

class Voiture extends Vehicule
{
    protected int $nbportes;
    protected string $type_carburant;

    public function __construct(string $marque, string $modele, int $vitesse_max, float $prix_journalier, int $nbportes, string $type_carburant){
        parent::__construct($marque, $modele, $vitesse_max, $prix_journalier);
        $this->nbportes = $nbportes;
        $this->type_carburant = $type_carburant;
    }

    public function getNbportes(): int
    {
        return $this->nbportes;
    }

    public function setNbportes(int $nbportes): void
    {
        $this->nbportes = $nbportes;
    }

    public function getTypeCarburant(): string
    {
        return $this->type_carburant;
    }

    public function setTypeCarburant(string $type_carburant): void
    {
        $this->type_carburant = $type_carburant;
    }



    public function afficherInfos() : void
    {
        echo "La $this->marque $this->modele , $this->nbportes portes $this->type_carburant qui va à $this->vitesse_max km/h, est afficher au prix de $this->prix_journalier par jour";
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        if ($this->type_carburant == "électrique"){
            $resultat = ($this->prix_journalier * $nbJours)*1.10;
        }else{
            $resultat = $this->prix_journalier * $nbJours;
        }
        return $resultat;
    }

}

