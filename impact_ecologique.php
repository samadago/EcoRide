<?php require_once('templates/header.php'); ?>

<main class="container my-5">
    <!-- Introduction -->
    <header class="text-center mb-5">
        <h1 class="display-4">Transport Durable</h1>
        <p class="lead">Partagez vos trajets pour réduire l'impact environnemental tout en économisant sur vos coûts de transport.</p>
    </header>

    <!-- Section principale -->
    <section>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="assets/img_ecolo/covoiture.jpg" class="img-fluid rounded shadow" alt="Voiture électrique partagée">
            </div>
            <div class="col-md-6">
                <h2 class="h3">Pourquoi opter pour le transport durable ?</h2>
                <p>En choisissant le covoiturage et les véhicules électriques, vous contribuez activement à :
                <ul>
                    <li>Réduire les émissions de CO2.</li>
                    <li>Économiser sur les coûts de carburant et d'entretien.</li>
                    <li>Promouvoir une mobilité plus respectueuse de l'environnement.</li>
                </ul>
                </p>
                <a href="trajets_partages.php" class="btn btn-success">Découvrir notre impact écologique</a>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="mt-5">
        <h2 class="text-center">Ce que disent nos utilisateurs</h2>
        <div class="row mt-4 g-4">
            <div class="col-lg-4">
                <blockquote class="blockquote">
                    <p>"Le covoiturage avec EcoRide a transformé ma façon de voyager. Non seulement je fais des économies, mais je contribue aussi à un avenir durable."</p>
                    <footer class="blockquote-footer">Marie L., Lyon</footer>
                </blockquote>
            </div>
            <div class="col-lg-4">
                <blockquote class="blockquote">
                    <p>"J'adore le concept de partager mes trajets en voiture électrique. C'est à la fois économique et écologique."</p>
                    <footer class="blockquote-footer">Thomas P., Bordeaux</footer>
                </blockquote>
            </div>
            <div class="col-lg-4">
                <blockquote class="blockquote">
                    <p>"C'est motivant de savoir qu'on peut réduire notre empreinte carbone en toute simplicité."</p>
                    <footer class="blockquote-footer">Claire R., Paris</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Appel à l'action -->
    <section class="text-center mt-5">
        <h2 class="h3">Prêt à faire la différence ?</h2>
        <p>Rejoignez la communauté EcoRide et découvrez une nouvelle manière de voyager, plus durable et économique.</p>
        <a href="signin.php" class="btn btn-secondary btn-lg">S'inscrire maintenant</a>
    </section>
</main>

<?php require_once('templates/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>