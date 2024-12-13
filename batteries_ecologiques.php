<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez nos véhicules électriques alimentés par des batteries écologiques pour un transport propre et respectueux de l'environnement.">
    <title>Énergie Propre - Nos Véhicules</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once('templates/header.php'); ?>

    <main class="container my-5">
        <!-- Introduction -->
        <header class="text-center mb-5">
            <h1 class="display-4">Énergie Propre</h1>
            <p class="lead">Nos véhicules sont alimentés par des batteries électriques pour un transport sans émissions de CO2.</p>
        </header>

        <!-- Section principale -->
        <section class="row align-items-center">
            <div class="col-md-6">
                <img src="assets/img_ecolo/electrique.jpg" class="img-fluid rounded shadow" alt="Voiture électrique écologique">
            </div>
            <div class="col-md-6">
                <h2 class="h3">Un avenir plus propre grâce à nos véhicules électriques</h2>
                <p>Chaque trajet effectué avec nos véhicules électriques contribue à la réduction des émissions de gaz à effet de serre. Nos batteries de pointe permettent une autonomie optimale tout en préservant l'environnement.</p>
                <a href="batteries_ecologiques.php" class="ecologie"></a>
            </div>
        </section>

        <!-- Avantages -->
        <section class="mt-5">
            <h2 class="text-center">Pourquoi choisir l'énergie propre ?</h2>
            <div class="row mt-4 g-4">
                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img_ecolo/low-emission.png" class="card-img-top" alt="Zero émissions">
                        <div class="card-body">
                            <h5 class="card-title">Zéro Émission</h5>
                            <p class="card-text">Réduisez votre empreinte carbone en optant pour des trajets 100% électriques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img_ecolo/save.png" class="card-img-top" alt="Économie d'énergie">
                        <div class="card-body">
                            <h5 class="card-title">Économies</h5>
                            <p class="card-text">Profitez d'un coût réduit par trajet grâce à nos véhicules électriques économiques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img_ecolo/save-the-planet.png" wigth=30px; heigth=30px; class="card-img-top" alt="Avenir vert">
                        <div class="card-body">
                            <h5 class="card-title">Avenir Durable</h5>
                            <p class="card-text">Participez à la construction d'un avenir plus vert pour les générations futures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('templates/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>