<?php
require_once 'connexionbd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    try {
        $requete = $connexion->prepare("INSERT INTO users (nom, prenom, sexe, username, email, mot_de_passe) VALUES (:nom, :prenom, :sexe, :username, :email, :mot_de_passe)");

        $requete->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'sexe' => $sexe,
            'username' => $username,
            'email' => $email,
            'mot_de_passe' => $mot_de_passe
        ));

        echo "Inscription réussie";
    } catch(PDOException $e) {
        echo "Erreur d'inscription : " . $e->getMessage();
    }
}
?>