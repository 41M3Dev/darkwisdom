<?php
// Démarrer la session
session_start();

// Supprimer toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Facultatif : Rediriger l'utilisateur ou afficher un message
header("Location: ../index.php");
exit;
?>