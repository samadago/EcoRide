<?php
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

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $date_naissance = $_POST['date_naissance'];
    $photo = null;

    // Vérifier si une photo est téléchargée et vérifier sa taille
    if (!empty($_FILES['photo']['tmp_name'])) {
        $maxFileSize = 2 * 1024 * 1024; // 2 Mo
        if ($_FILES['photo']['size'] > $maxFileSize) {
            die("Erreur : La taille du fichier photo dépasse la limite autorisée de 2 Mo.");
        }
        $photo = file_get_contents($_FILES['photo']['tmp_name']);
    }

    // Vérifier que l'email et le pseudo sont uniques
    $checkSql = "SELECT COUNT(*) FROM utilisateur WHERE email = :email OR pseudo = :pseudo";
    $stmt = $pdo->prepare($checkSql);
    $stmt->execute([':email' => $email, ':pseudo' => $pseudo]);
    if ($stmt->fetchColumn() > 0) {
        die("Erreur : L'email ou le pseudo est déjà utilisé.");
    }

    // Insertion de l'utilisateur dans la base de données
    try {
        $sql = "INSERT INTO utilisateur (nom, prenom, email, password, telephone, adresse, date_naissance, photo, pseudo)
                VALUES (:nom, :prenom, :email, :password, :telephone, :adresse, :date_naissance, :photo, :pseudo)";
        $stmt = $pdo->prepare($sql);

        // Exécution avec les paramètres
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $password,
            ':telephone' => $telephone,
            ':adresse' => $adresse,
            ':date_naissance' => $date_naissance,
            ':photo' => $photo,
            ':pseudo' => $pseudo
        ]);

        // Redirection vers la page de profil
        header("Location: profile.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur lors de l'inscription : " . $e->getMessage();
    }
}