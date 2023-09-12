<?php
// inclure le fichier "utilisateur.php"
require_once "utilisateur.php";

// récupérer les informations du formulaire
if (isset($_POST['inscription'])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);

    $cryptedMdp = password_hash($mdp, PASSWORD_DEFAULT);

    $user = new Utilisateur($nom, $prenom, $email, $cryptedMdp);
    $user->inscription();
}

// créer une instance de la classe "Utilisateur"


// appélez la méthode "inscription" pour enregistrer les donnes dans bd