<?php
session_start(); // Démarre la session
session_destroy(); // Détruit toutes les données de la session

// Redirige l'utilisateur vers la page d'index
header("Location: ../index.php");
exit; // Assure que le script s'arrête après la redirection
?>