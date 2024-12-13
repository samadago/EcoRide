<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: connexion.php");
    exit();
}

$user = $_SESSION['user'];
require_once('templates/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center">
                <h2>Bienvenue, <?php echo htmlspecialchars($user['prenom']) . " " . htmlspecialchars($user['nom']); ?>!
                </h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Informations personnelles</h5>
                <p class="card-text"><strong>Pseudo:</strong> <?php echo htmlspecialchars($user['pseudo']); ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p class="card-text"><strong>Téléphone:</strong> <?php echo htmlspecialchars($user['telephone']); ?></p>
                <p class="card-text"><strong>Adresse:</strong> <?php echo htmlspecialchars($user['adresse']); ?></p>
                <p class="card-text"><strong>Date de naissance:</strong>
                    <?php echo htmlspecialchars($user['date_naissance']); ?></p>
                <?php if ($user['photo']): ?>
                <div class="text-center">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($user['photo']); ?>" class="img-thumbnail"
                        alt="Photo de profil">
                </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-center">
                <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
            </div>
        </div>
    </div>
</body>

</html>

<?php require_once('templates/footer.php'); ?>