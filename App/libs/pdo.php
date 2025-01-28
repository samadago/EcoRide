<?php
$host = '127.0.0.1';
$dbname = 'covoiturage';
$username = 'root';
$password = 'yes';

try {

    $pdo = new PDO("mysql:host=$host;dbname=covoiturage;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
