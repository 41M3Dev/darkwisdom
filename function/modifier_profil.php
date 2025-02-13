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

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $pseudo = trim($_POST['pseudo']);
    $mail = trim($_POST['mail']);
    $user_id = $_SESSION['user_id'];

    // Vérifier que les champs ne sont pas vides
    if (empty($nom) || empty($prenom) || empty($pseudo) || empty($mail)) {
        die("Tous les champs doivent être remplis.");
    }

    // Requête SQL sécurisée
    $query = "UPDATE utilisateurs SET nom = ?, prenom = ?, pseudo = ?, mail = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Erreur de préparation de la requête : " . $conn->error);
    }

    // Associer les paramètres
    $stmt->bind_param("ssssi", $nom, $prenom, $pseudo, $mail, $user_id);
    
    if ($stmt->execute()) {
        header("Location: ../pages/dashboard.php?success=1");
    } else {
        echo "Erreur lors de la mise à jour : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
