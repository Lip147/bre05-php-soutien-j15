<?php

class Animal {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function afficherInformations() {
        echo "Un son générique d'animal";
    }
}

class Chien extends Animal {
    
    public function emettreSon() {
        echo "Woof !";
    }
}

class Chat extends Animal {
    
    public function emettreSon() {
        echo "Miaou !";
    }
}

$chien = new Chien("Rex");
$chat = new Chat("Minou");

$chien->emettreSon();
echo "<br>";
$chat->emettreSon();

?>