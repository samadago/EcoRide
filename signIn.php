<?php
session_start();
require_once('templates/header.php');
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>


<main class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-signin w-100 m-auto" style="max-width: 400px;">
        <form method="POST" action="handleSignIn.php">
            <div class="text-center">
                <img class="mb-4 img-fluid rounded" src="assets/img_ecolo/tablette.jpg" alt="Image de tablette" style="max-width: 100%; height: auto;">
                <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>
            </div>

            <?php if (!empty($error)) echo '<p class="text-danger text-center">' . htmlspecialchars($error) . '</p>'; ?>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"
                    required>
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword"
                    placeholder="Mot de passe" required>
                <label for="floatingPassword">Mot de passe</label>
            </div>

            <button class="btn btn-success w-100 py-2" type="submit">Se connecter</button>
        </form>

        <!-- Lien vers la page d'inscription -->
        <div class="text-center mt-4">
            <p>Pas encore de compte ? <a href="handleSignup.php">Inscrivez-vous ici</a></p>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-success w-100 py-2" type="submit">Admin</button>

        </div>
    </div>
</main>

<?php require_once('templates/footer.php'); ?>