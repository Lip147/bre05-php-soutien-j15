<?php

class Personne {
    private $nom;
    private $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function afficherInformations() {
        echo "Nom : " . $this->nom . ", Âge : " . $this->age . " ans";
    }
}

$personne1 = new Personne("John", 30);
$personne1->afficherInformations();

?>