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
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    die("Utilisateur non connecté.");
}

$user_id = $_SESSION['user_id'];

// Requête SQL pour récupérer les citations favorites de l'utilisateur avec leur thème
$sql = "SELECT c.id, c.citation, c.auteur, c.source, c.theme 
        FROM favoris f
        JOIN citation c ON f.citation_id = c.id
        WHERE f.utilisateurs_id = ? 
        ORDER BY c.theme";

$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$favoris = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Organiser les citations par thème
$citations_par_theme = [];
foreach ($favoris as $citation) {
    $citations_par_theme[$citation['theme']][] = $citation;
}
?>
