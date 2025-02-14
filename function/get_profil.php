<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    die("Veuillez vous connecter.");
}

$host = "localhost";
$user = "root";
$password = "";
$database = "darkwisdom";

// Connexion à la base de données
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Vérifier la connexion
$user_id = $_SESSION['user_id'];
$query = "SELECT nom, prenom, pseudo, mail FROM utilisateurs WHERE id = ?";

// Vérification de la requête SQL
if (!$stmt = $conn->prepare($query)) {
    die("Erreur de préparation de la requête : " . $conn->error);
}

// Exécution de la requête
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>
