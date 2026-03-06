<?php

class Voiture {
    private $marque;
    private $modele;
    private $couleur;

    public function __construct($marque, $modele, $couleur) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
    }

    public function demarrer() {
        echo "La voiture démarre !";
    }
}

$voiture1 = new Voiture("Toyota", "Corolla", "Rouge");
$voiture1->demarrer();

?>