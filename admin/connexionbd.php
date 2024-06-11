<?php
$serveur = "localhost";
$utilisateur = "root" ;
$mot_de_passe = "";
$nom_base_de_donnees = "authentification";

try {
    $connexion = new PDO("mysql:host=$serveur; 
    dbname=$nom_base_de_donnees", $utilisateur, $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";    
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

