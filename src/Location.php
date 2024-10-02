<?php

namespace App;

class Location
{
    protected int $nbJours;
    private array $vehicules;

    public function __construct(int $nbJours, array $vehicules){

        $this->nbJours = $nbJours;
        $this->vehicules = $vehicules;
    }

    public function getNbJours(): int
    {
        return $this->nbJours;
    }

    public function setNbJours(int $nbJours): void
    {
        $this->nbJours = $nbJours;
    }

    public function getVehicules(): array
    {
        return $this->vehicules;
    }

    public function setVehicules(array $vehicules): void
    {
        $this->vehicules = $vehicules;
    }

    public function louerVehicule(Vehicule $vehicule) : void
    {
        $this->vehicules[] = $vehicule;
    }

    public function afficherInfos(): void
    {
        $prix_total = 0;
        foreach($this->vehicules as $vehicule){
            echo $vehicule->afficherInfos()."\n";
            $prix_total += $vehicule->calculerCoutLocation($this->nbJours);
        }
        echo "\n Le prix total est de $prix_total .";
    }

}

