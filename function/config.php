<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "darkwisdom";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
}
catch(PDOException $e){
    die("Connection failed: " . $e->getMessage());
}
