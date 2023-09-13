<?php
session_start();
// inclure le fichier "utilisateur.php"
require_once "utilisateur.php";

// récupérer les informations du formulaire
if (isset($_POST['inscription'])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $cryptedMdp = password_hash($password, PASSWORD_DEFAULT);

    $user = new Utilisateur($nom, $prenom, $email, $cryptedMdp);
    $user->inscription();
}

if (isset($_POST['connexion'])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // appel de la méthode statique connexion
    Utilisateur::connexion($email, $password);
}