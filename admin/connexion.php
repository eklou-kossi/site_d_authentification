<?php
session_start(); // Démarre la session

require_once 'connexionbd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    try {
        // Préparation de la requête de sélection
        $requete = $connexion->prepare("SELECT * FROM users WHERE email = :email");

        // Exécution de la requête en passant le paramètre
        $requete->execute(array('email' => $email));

        $utilisateur = $requete->fetch();

        // Vérification du mot de passe
        if (($utilisateur['email'] = $email) && ($utilisateur['mot_de_passe'] = $mot_de_passe)) {
            // Authentification réussie
            $_SESSION['utilisateur_id'] = $utilisateur['id']; // Crée une variable de session avec l'ID de l'utilisateur
            $_SESSION['utilisateur_nom'] = $utilisateur['nom']; // Vous pouvez ajouter d'autres informations de l'utilisateur à la session si nécessaire
            // Redirection vers une page sécurisée ou autre action après connexion
            header('Location: ../admin-page.php'); // Redirige l'utilisateur vers la page de tableau de bord après connexion
            exit; // Termine le script pour éviter toute exécution supplémentaire
        } else {
            // Authentification échouée
            echo "Identifiants incorrects";
        }
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>