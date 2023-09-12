<?php
class Moule
{
    // attributs du gateau
    public $gout;
    public $texture;

    // les méthodes du gateau
    public function nourrir()
    {
        echo "je suis un gateau au " . $this->gout . " " . $this->texture . " je vous regale <br>";
    }
}

// créer un gateau au chocolat fondant

// déclarer une variable
$gateauChocolat = new Moule(); // instancier un objet
$gateauChocolat->gout = "chocolat";
$gateauChocolat->texture = "fondant";
$gateauChocolat->nourrir();

$gateauPistache = new Moule(); // instancier un objet
$gateauPistache->gout = "pistache";
$gateauPistache->texture = "fondant";