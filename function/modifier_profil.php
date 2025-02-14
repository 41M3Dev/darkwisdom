<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "darkwisdom");

    if ($conn->connect_error) {
        die("Erreur de connexion : " . $conn->connect_error);
    }

    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $pseudo = trim($_POST['pseudo']);
    $mail = trim($_POST['mail']);
    $user_id = $_SESSION['user_id'];

    $query = "UPDATE utilisateurs SET nom = ?, prenom = ?, pseudo = ?, mail = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ssssi", $nom, $prenom, $pseudo, $mail, $user_id);
        if ($stmt->execute()) {
            $_SESSION['success_message'] = "Profil mis à jour avec succès.";
        } else {
            $_SESSION['error_message'] = "Erreur lors de la mise à jour.";
        }
        $stmt->close();
    } else {
        $_SESSION['error_message'] = "Erreur de préparation de la requête : " . $conn->error;
    }

    $conn->close();
}

// Redirection vers le profil pour afficher le message
header("Location: ../pages/dashboard.php");
exit();

?>
