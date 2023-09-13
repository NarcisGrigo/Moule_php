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
    private $password;

    public function __construct($nom, $prenom, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
    }

    public function inscription()
    {
        // créer une instance de DbConnect
        $dbConnect = new DbConnect();

        // se connécter a la bd
        $db = $dbConnect->dbConnexion();

        // préparer la réquette
        $request = $db->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `mdp`) VALUES (?, ?, ?, ?)");
        try {
            // éxécuter la réquette
            $request->execute(array($this->nom, $this->prenom, $this->email, $this->password));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // une méthode statique c'est une méthode qui appartient a la classe elle meme
    // et pas aux instances de cette classe
    // une propriété statique peut etre éxécuté sans instancier la classe qui l'encapsule

    // méthode connexion
    public static function connexion($email, $password)
    {
        // créer une instance de DbConnect
        $dbConnect = new DbConnect();

        // se connecter a la bd
        $db = $dbConnect->dbConnexion();

        // préparer la réquette
        $request = $db->prepare("SELECT * FROM utilisateur WHERE email = ?");

        // éxécuter la réquette
        try {
            $request->execute(array($email));
            $user = $request->fetch();

            if(empty($user)) { // si "$user" est vide
                echo "Utilisateur inconnue";
            }else { // sinon
                if(password_verify($password, $user['mdp'])) {
                    // création des variables de session et rédirection vers la bonne page
                    $_SESSION['prenom'] = $user['prenom'];
                    header("Location: accueil.php");
                }else {
                    echo "Mot de passe incorrect";
                }
            }
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}