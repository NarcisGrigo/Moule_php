<?php
// de créer la classe "Utilisateur" avec les propriétés :
// nom, prenom, email, mot de passe
// les méthodes : s'inscrire, se connecter, se deconnecter

include "database.php";

class Utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $cryptedMdp;

    public function __construct($nom, $prenom, $email, $cryptedMdp)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->cryptedMdp = $cryptedMdp;
    }

    public function inscription()
    {
        // crer une instance de DbConnect
        $dbConnect = new DbConnect();

        // se connecter a la bd
        $db = $dbConnect->dbConnexion();

        // preparer la requette
        $request = $db->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `mdp`) VALUES (?, ?, ?, ?)");
        try {
            // excecuter la requette
            $request->execute(array($this->nom, $this->prenom, $this->email, $this->cryptedMdp));
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
