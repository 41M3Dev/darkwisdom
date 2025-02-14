<?php
session_start();

$host = "localhost";
$dbname = "darkwisdom";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    die("Utilisateur non connecté.");
}

$user_id = $_SESSION['user_id'];

if (isset($_GET['id'])) {
    $citation_id = intval($_GET['id']);

    // Supprimer la citation des favoris
    $sql = "DELETE FROM favoris WHERE utilisateurs_id = ? AND citation_id = ?";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$user_id, $citation_id])) {
        // Rediriger avec un message de succès
        header("Location: ../pages/profil.php?message=success");
        exit;
    } else {
        // Rediriger avec un message d'erreur
        header("Location: ../pages/profil.php?message=error");
        exit;
    }
} else {
    die("ID de citation invalide.");
}
?>
