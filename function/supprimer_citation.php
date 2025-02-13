<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "darkwisdom";

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    exit(); // Sortir immédiatement SANS afficher d'erreur
}

// Vérifier si un ID est bien passé en paramètre
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sécurisation de l'ID

    // Préparer la requête SQL
    $query = "DELETE FROM citation WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();
exit(); // Assure que le script PHP se termine proprement
?>
