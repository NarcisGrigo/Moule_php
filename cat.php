<?php
class Cat
{
    // attributs
    private $nom;
    private $couleur;
    private $race;
    private $age;

    // constructeur de la classe
    public function __construct($nom, $couleur, $race, $age)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->age = $age;
    }

    // créer le "getter" et le "setter" de la propriété "age"

    // le "getter" : son role c'est de récupérer la valeur de la propriété déclaré avec le mot clé "private"
    public function getAge()
    {
        return $this->age;
    }

    // le "setter" : son role est de mettre a jour la propriété en question déclaré avec le mot clé "private"
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

    // public function setAge($incrementBy = 1)
    // {
    //     $this->age += $incrementBy;
    // }
}

// créer un chat
$chat1 = new Cat("Cynthia", "beige", "siamois", 3);
$chat1->setAge(4);
echo $chat1->getAge();