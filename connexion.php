

<?php require_once('templates/header.php'); ?>

    <div class="container">
        <h2>Connexion</h2>
        <?php if (isset($error)) echo '<p style="color:red;">' . $error . '</p>'; ?>
        <form method="post" id="loginForm">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>

<?php require_once('templates/footer.php'); ?>