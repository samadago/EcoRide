<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="icon" type="image/x-icon" href="assets/img_ecolo/logo_eco.png" />
  <title>Covoiturage écologique</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="margin-right:10px;">
          <img src="assets/img_ecolo/logo_eco.png" alt="logo" style="width:80px;" class="rounded-pill" />
          <span class="logo">Eco<span>Ride</span></span>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-signin w-100 m-auto" style="max-width: 400px;">
      <form method="POST" action="handleSignIn.php">
        <div class="text-center">
          <img class="mb-4 img-fluid rounded" src="assets/img_ecolo/reglages.png" alt="Image de tablette" style="max-width: 100%; height: auto;">
          <h1 class="h3 mb-3 fw-normal">Hello Admin</h1>
        </div>

        <?php if (!empty($error)) echo '<p class="text-danger text-center">' . htmlspecialchars($error) . '</p>'; ?>

        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Email</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Mot de passe" required>
          <label for="floatingPassword">Mot de passe</label>
        </div>

        <!-- Hidden field to indicate an admin login -->
        <input type="hidden" name="adminLogin" value="true">

        <button class="btn btn-success w-100 py-2" type="submit">Se connecter</button>
      </form>
    </div>
  </main>
  <?php require_once('templates/footer.php'); ?>
</body>
</html>
