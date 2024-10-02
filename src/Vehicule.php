<?php
// Classe vehicule
namespace App;
class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $vitesse_max;
    protected float $prix_journalier;

    public function __construct($marque, $modele, $vitesse_max, $prix_journalier){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse_max = $vitesse_max;
        $this->prix_journalier = $prix_journalier;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    public function getVitesseMax(): int
    {
        return $this->vitesse_max;
    }

    public function setVitesseMax(int $vitesse_max): void
    {
        $this->vitesse_max = $vitesse_max;
    }

    public function getPrixJournalier(): int
    {
        return $this->prix_journalier;
    }

    public function setPrixJournalier(int $prix_journalier): void
    {
        $this->prix_journalier = $prix_journalier;
    }

    public function afficherInfos() : void
    {
        echo "La $this->marque $this->modele qui va à $this->vitesse_max est afficher au prix de $this->prix_journalier par jour";
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        $resultat = $this->prix_journalier * $nbJours;
        return $resultat;
    }


}