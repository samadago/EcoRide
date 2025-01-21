<?php
// Connexion à la base de données
$host = '127.0.0.1';
$dbname = 'covoiturage';
$username = 'root';
$password = 'yes';

try {
    $pdo = new PDO("mysql:host=$host;dbname=covoiturage;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'connexion a la base de données reussi';
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);
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

?>

<main class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-signin w-100 m-auto" style="max-width: 400px;">
        <h2 class="card-title text-center mb-4">Inscription</h2>
        <form action="handleSignup.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="pseudo" class="form-label">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone :</label>
                <input type="tel" name="telephone" id="telephone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse :</label>
                <input type="text" name="adresse" id="adresse" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date_naissance" class="form-label">Date de naissance :</label>
                <input type="date" name="date_naissance" id="date_naissance" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo (facultatif) :</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="form-control">
            </div>

            <button type="submit" class="btn btn-success w-100">S'inscrire</button>
        </form>
    </div>
</main>