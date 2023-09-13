<?php
/**
 * créer une classe abstraite "FormeGeometrique"
 * avec les attributs suivants :
 * 1) Surface
 * 2) Perimetre
 * créer la classe "Rectangle" fille de "FormeGeometrique" avec les attributs suivants :
 * 1) Longueur
 * 2) Largeur
 * et les méthodes "calculerSurface" et "calculerPerimetre"
 * créer la classe "Cercle" fille de "FormeGeometrique" avec les propriétés suivantes :
 * 1) Rayon
 * et les méthodes "calculerSurface" et "calculer"Perimetre"
 **/

abstract class FormeGeometrique
{
    protected $surface;

    protected $perimetre;

    public function __construct($surface, $perimetre)
    {
        $this->surface = $surface;
        $this->perimetre = $perimetre;
    }
}


class Rectangle extends FormeGeometrique
{
    public $longueur;
    public $largeur;

    public function __construct($longueur, $largeur, $surface, $perimetre)
    {
        parent::__construct($surface, $perimetre);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface()
    {
        $this->longueur * $this->largeur;
    }

    public function calculerPerimetre()
    {
        2 * ($this->longueur + $this->largeur);
    }
}


class Cercle extends FormeGeometrique
{
    public $rayon;

    public function __construct($rayon, $surface, $perimetre)
    {
        parent::__construct($surface, $perimetre);
        $this->rayon = $rayon;
    }

    public function calculerSurface()
    {
        M_PI * pow($this->rayon, 2);
    }

    public function calculerPerimetre()
    {
        2 * M_PI * $this->rayon;
    }
}