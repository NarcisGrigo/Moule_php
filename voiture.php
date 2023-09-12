<?php

// créez une classe Voiture avec les attributs suivants :
// couleur, marque, model
// et les méthodes suivantes :
// rouler, accelerer, freiner

// créez une voiture de marque Peugeot de modéle 308 et couleur noire

class Car
{
    public $couleur;
    public $marque;
    public $model;

    public function rouler()
    {
        echo "Je roule mon " . $this->marque . " de modéle " . $this->model . " avec la couleur " . $this->couleur . "<br>" . "<br>";
    }

    public function accelerer()
    {
        echo "Je roule mon " . $this->marque . " de modéle " . $this->model . " avec la couleur " . $this->couleur . "<br>" . "<br>";
    }

    public function freiner()
    {
        echo "Je roule mon " . $this->marque . " de modéle " . $this->model . " avec la couleur " . $this->couleur . "<br>" . "<br>";
    }
}

// on fait rouler la voiture
$voiture = new Car();
$voiture->couleur = "noire";
$voiture->marque = "Peugeot";
$voiture->model = "308";
$voiture->rouler();

// on fait accélérer la voiture
$voiture2 = new Car();
$voiture2->couleur = "blanche";
$voiture2->marque = "Mercedes";
$voiture2->model = "Maybach Classe-S";
$voiture2->accelerer();

// on fait freiner la voiture
$voiture3 = new Car();
$voiture3->couleur = "bleue";
$voiture3->marque = "BMW";
$voiture3->model = "i8";
$voiture3->freiner();


// class Voiture avec constructeur

class VoitureConstructeur
{
    // attributs
    public $marque;
    public $modele;
    public $couleur;
    // constructeur
    public function __construct($brand, $model, $color)
    {
        $this->marque = $brand;
        $this->modele = $model;
        $this->couleur = $color;
    }

    public function rouler()
    {
        echo "Je roule mon " . $this->marque . " de modéle " . $this->modele . " avec la couleur " . $this->couleur . "<br>" . "<br>";
    }

    public function accelerer()
    {
        echo "Je roule mon " . $this->marque . " de modéle " . $this->modele . " avec la couleur " . $this->couleur . "<br>" . "<br>";
    }

    public function freiner()
    {
        echo "Je roule mon " . $this->marque . " de modéle " . $this->modele . " avec la couleur " . $this->couleur . "<br>" . "<br>";
    }
}


// créer une Voiture
$v2 = new VoitureConstructeur("Citroen", "C4", "rouge");
// appeler la méthode "rouler()"
$v2->rouler();