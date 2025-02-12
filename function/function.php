<?php
session_start();
require_once 'function.php';
function inscriptionCitoyen(): string
{
    $sql_user = "";
    return $sql_user;
}
function getTypeIncident(): string{
    $sql_type = "SELECT * FROM type";
    return $sql_type;
}

function declarationIncident(): string
{
    $sql_user = "INSERT INTO incident (secteur,type_id,utilisateur_id) VALUES (?,?,?)";
    return $sql_user;
}
function getUser(): string{
    $sql_type = "SELECT * FROM utilisateurs";
    return $sql_type;
}

function dashboard(): string{
    $sql_dash = "SELECT * FROM incident WHERE  id = :user_id";
    return $sql_dash;
}
