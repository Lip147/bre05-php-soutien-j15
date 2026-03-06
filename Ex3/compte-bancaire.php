<?php

class CompteBancaire {
    private $solde;

    public function __construct($soldeInitial) {
        $this->solde = $soldeInitial;
    }

    public function deposer($montant) {
        $this->solde += $montant;
    }

    public function retirer($montant) {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Erreur : solde insuffisant.";
        }
    }

    public function afficherSolde() {
        echo "Solde actuel : " . $this->solde . " €";
    }
}

$compte = new CompteBancaire(100);
$compte->deposer(50);
$compte->retirer(30);
$compte->afficherSolde();

?>