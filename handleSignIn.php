<?php
session_start();

// Connexion à la base de données
$host = '127.0.0.1';
$dbname = 'ecoridedb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification des informations de connexion
    $sql = "SELECT * FROM utilisateur WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Stockage des informations de l'utilisateur dans la session
        $_SESSION['user'] = $user;

        // Redirection vers la page de profil
        header("Location: profile.php");
        exit();
    } else {
        // Redirection avec message d'erreur
        header("Location: signIn.php?error=Email ou mot de passe incorrect.");
        exit();
    }
} else {
    // Redirection vers la page de connexion si le formulaire n'est pas envoyé
    header("Location: signIn.php");
    exit();
}