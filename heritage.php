<?php
// class "Humain" qui sera la classe mére de "Magicien" & "Patissier"
class Humain
{

    // attributs communs aux classes filles
    protected $nom;
    protected $prenom;

    // le constructeur
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // méthodes communes aux classes filles
    public function dormir()
    {
        echo "Je fais dodo";
    }
}

// class "Magicien" qui étend la classe "Humain" du coup "Magicien" va hériter des propriétés et méthodes de "Humain"
class Magicien extends Humain
{
    public $baguette;

    public function __construct($nom, $prenom, $baguette)
    {
        // $this->nom = $nom;
        // $this->prenom = $prenom;

        parent::__construct($nom, $prenom);
        $this->baguette = $baguette;
    }
    public function faireUnTourDeMagie()
    {
        echo " Bonjour, c'est " . $this->prenom . " " . $this->nom . " J'ai la " . $this->baguette . ", Wow voici un petit lapin sortir le chapeau ";
    }
}

// class "Patissier"
class Patissier extends Humain{
    public $batteur = "electrique";

    // methode propre a la patissiere
    public function faireDeBonGateau()
    {
        echo " Bonjour, c'est " .
            $this->prenom .
            $this->nom . " J'ai un super batteur " .
            $this->batteur . " Miam voici un delicieux gateau ";
    }
}

// instancier un magicien
$magic = new Magicien(" Le Mago ", " Julien ", " baguette de sureau ");
$magic->faireUnTourDeMagie();
echo "<br>";

// créer une patissiere
$patissiere = new Patissier(" CHERIE ", " Nawal ");
$patissiere->faireDeBonGateau();

