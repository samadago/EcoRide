<?php require_once('templates/header.php'); ?>

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