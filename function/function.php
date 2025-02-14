<?php
session_start();
require_once 'config.php';
function inscriptionUtilisateur(): string
{
    $sql_user = "INSERT INTO `utilisateurs`(`nom`, `prenom`, `pseudo`, `mot_de_passe`,`roles`, `mail`) VALUES (?,?,?,?,?,?)";
    return $sql_user;
}
function citation($type): string{
    $sql_type = "SELECT * FROM citation where theme  = '$type'LIMIT 6 ";
    return $sql_type;
}
function getUser(): string{
    $sql_type = "SELECT * FROM utilisateurs";
    return $sql_type;
}

function dashboard(): string{
    $sql_dash = "SELECT * FROM incident WHERE  id = :user_id";
    return $sql_dash;
}