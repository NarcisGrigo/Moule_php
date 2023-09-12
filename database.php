<?php
// créer la classe "DbConnect" permettant de se connecter a la base de données

class DbConnect {
    public function dbConnexion() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=cours_db", "root", "");
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }
}