<?php require_once('templates/header.php'); ?>

<main class="container my-5">
    <!-- Section de titre -->
    <header class="text-center mb-5">
        <h1 class="display-4">Des trajets partagés, un impact réduit</h1>
        <p class="lead">Ensemble, nous réduisons notre empreinte carbone en partageant nos trajets à bord de voitures électriques.</p>
    </header>

    <!-- Section principale -->
    <section class="row align-items-center">
        <div class="col-md-6">
            <img src="assets/img_ecolo/trajets_partages.jpg" class="img-fluid rounded" alt="Personnes partageant une voiture électrique">
        </div>
        <div class="col-md-6">
            <h2 class="h3">Pourquoi choisir le covoiturage électrique ?</h2>
            <p>Le covoiturage électrique permet de réduire considérablement les émissions de CO2 en regroupant plusieurs passagers dans une même voiture. Cela réduit le nombre de véhicules sur la route et diminue la pollution atmosphérique.</p>
            <ul>
                <li>Réduction des coûts pour les passagers et conducteurs.</li>
                <li>Un impact environnemental minimal grâce à l'énergie propre.</li>
                <li>Renforcement des liens sociaux dans une communauté engagée.</li>
            </ul>
        </div>
    </section>

    <!-- Section d'impact -->
    <section class="mt-5">
        <h2 class="h3 text-center">Les bénéfices environnementaux</h2>
        <p class="text-center">Chaque trajet partagé contribue à un avenir plus propre :</p>
        <div class="row text-center">
            <div class="col-lg-4">
                <img src="assets/img_ecolo/emissions_reduites.jpg" class="img-fluid rounded-circle mb-3" alt="Réduction des émissions">
                <h3 class="h5">Réduction des émissions</h3>
                <p>Moins de véhicules, moins de CO2 rejeté dans l'atmosphère.</p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img_ecolo/energie_verte.jpg" class="img-fluid rounded-circle mb-3" alt="Énergie propre">
                <h3 class="h5">Utilisation d'énergie propre</h3>
                <p>Nos véhicules fonctionnent avec des batteries électriques alimentées par des sources renouvelables.</p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img_ecolo/communite_verte.jpg" class="img-fluid rounded-circle mb-3" alt="Communauté écologique">
                <h3 class="h5">Communauté écologique</h3>
                <p>Ensemble, nous bâtissons un réseau pour un futur durable.</p>
            </div>
        </div>
    </section>

    <!-- Section d'appel à l'action -->
    <section class="text-center mt-5">
        <h2 class="h3">Rejoignez notre mouvement</h2>
        <p>Faites partie de la solution en optant pour le covoiturage électrique. Ensemble, nous créons un avenir plus propre et plus responsable.</p>
        <a href="inscription.php" class="btn btn-primary btn-lg">Inscrivez-vous dès maintenant</a>
    </section>
</main>

<?php require_once('templates/footer.php'); ?>