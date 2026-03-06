<?php

class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerAire() {
        return $this->longueur * $this->largeur;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Aire du rectangle : " . $rectangle->calculerAire();

?>