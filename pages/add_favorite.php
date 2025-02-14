<?php
global $pdo;
header('Content-Type: application/json');
session_start();
require '../function/config.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "Utilisateur non connecté"]);
    exit;
}
$utilisateurs_id = $_SESSION['user_id'];
$citation_id = $_POST['citation_id'] ?? null;
if ($citation_id) {
    $query = $pdo->prepare("SELECT * FROM favoris WHERE utilisateurs_id = ? AND citation_id = ?");
    $query->execute([$utilisateurs_id, $citation_id]);
    if ($query->rowCount() > 0) {
        $query = $pdo->prepare("DELETE FROM favoris WHERE utilisateurs_id = ? AND citation_id = ?");
        $query->execute([$utilisateurs_id, $citation_id]);
        echo json_encode(["status" => "success", "action" => "removed"]);
    } else {
        $query = $pdo->prepare("INSERT INTO favoris (utilisateurs_id, citation_id) VALUES (?, ?)");
        $query->execute([$utilisateurs_id, $citation_id]);
        echo json_encode(["status" => "success", "action" => "added"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "ID de citation invalide"]);
}
?>
