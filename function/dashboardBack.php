<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "darkwisdom";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "";
}
// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer toutes les citations groupées par thème
$query = "SELECT * FROM citation ORDER BY theme"; // Correction du nom de la table
$result = $conn->query($query); //ORDER BY theme → Trie les résultats par theme

if (!$result) {
    die("Erreur SQL : " . $conn->error); // Affiche l'erreur SQL pour déboguer 
}

$citations = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {// On utilise while pour parcourir chaque ligne
        $citations[$row['theme']][] = $row; // Stocke les citations par thème
    }
}// Sans fetch_assoc(), $row serait un tableau indexé (moins pratique) :

// Pas de fermeture de la connexion ici pour pouvoir l'utiliser ailleurs
?>
