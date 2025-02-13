<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "darkwisdom";


$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données.");
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $citation = $_POST["citation"] ?? "";
    $auteur = $_POST["auteur"] ?? "";
    $source = $_POST["source"] ?? "";
    $theme = $_POST["theme"] ?? "";
    $utilisateurs_id = $_POST["utilisateurs_id"] ?? null;

    // Vérifier si les champs obligatoires sont remplis
    if (!empty($citation) && !empty($auteur) && !empty($theme)) {
        // Requête pour insérer la citation
        $query = "INSERT INTO citation (citation, auteur, source, theme, utilisateurs_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ssssi", $citation, $auteur, $source, $theme, $utilisateurs_id);
            $stmt->execute();
            $stmt->close();

            // Redirection avec un message de succès
            header("Location: ../pages/dashboard.php?success=1");
            exit();
        }
    }
}

$conn->close();
?>
