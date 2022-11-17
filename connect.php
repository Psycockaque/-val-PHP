<?php

$user = "root";
$pass = "root";
$dbname = "livre";
$host = "localhost";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo "connexion erreur" . $e->getMessage();
}