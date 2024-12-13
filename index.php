<?php require_once('templates/header.php'); ?>

<main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img_ecolo/voiture_electri.jpg" class="d-block w-100"
                    alt="Voiture électrique écologique">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Nos véhicules électriques</h1>

                        <p><a class="btn btn-lg btn-primary" href="signupForm.php">Rejoignez-nous dès maintenant</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/img_ecolo/route.jpg" class="d-block w-100" alt="Route écologique dans la nature">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Des trajets partagés, un impact réduit</h1>
                        <p>Ensemble, nous réduisons notre empreinte carbone en partageant nos trajets à bord de voitures
                            électriques.</p>
                        <p><a class="btn btn-lg btn-primary" href="trajets_partages.php">En savoir plus</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/img_ecolo/bureau.jpg" class="d-block w-100" alt="Communauté de covoiturage">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Rejoignez notre communauté</h1>
                        <p>Un réseau croissant de conducteurs et passagers engagés pour un avenir plus vert.</p>
                        <p><a class="btn btn-lg btn-primary" href="galerie.php">Voir la galerie</a></p>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>



    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4">
                <img src="assets/img_ecolo/batterie%20_eco.jpg" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" alt="Batterie de voiture électrique">
                <h2 class="fw-normal">Énergie propre</h2>
                <p>Nos véhicules sont alimentés par des batteries électriques pour un transport sans émissions de CO2.
                </p>
                <p><a class="btn btn-secondary" href="batteries_ecologiques.php">En savoir plus pour nos voitures »</a></p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img_ecolo/automobile.jpg" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" alt="Transport durable">
                <h2 class="fw-normal">Transport durable</h2>
                <p>Partagez vos trajets pour réduire l'impact environnemental tout en économisant sur vos coûts de
                    transport.</p>
                <p><a class="btn btn-secondary" href="impact_ecologique.php">Découvrir notre impact écologique»</a></p>
            </div>
            <div class="col-lg-4">
                <img src="assets/img_ecolo/jeune_eco.jpg" class="bd-placeholder-img rounded-circle" width="140"
                    height="140" alt="Communauté écologique">
                <h2 class="fw-normal">Communauté verte</h2>
                <p>Rejoignez une communauté de voyageurs engagés dans la lutte contre le réchauffement climatique.</p>
                <p>Découvrez notre flotte de véhicules électriques modernes, pour un transport plus propre et
                    respectueux de l'environnement</p>
                <p><a class="btn btn-secondary" href="signupForm.php">Rejoignez-nous »</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Conduire propre. <span class="text-muted">Un avenir plus vert.</span>
                </h2>
                <p class="lead">Nos voitures électriques sont non seulement respectueuses de l'environnement, mais elles
                    offrent aussi un confort moderne et une conduite fluide. Profitez d'une expérience de covoiturage
                    sans pollution, tout en contribuant à un monde plus propre.</p>
            </div>
            <div class="col-md-5">
                <img src="assets/img_ecolo/voiture_eco.jpg" class="featurette-image img rounded-circle" width="500"
                    height="500" alt="Conduite propre avec voiture électrique">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Une communauté soudée. <span class="text-muted">Unie par
                        l'écologie.</span></h2>
                <p class="lead">Notre plateforme réunit des personnes partageant les mêmes valeurs. Ensemble, nous
                    pouvons réduire l'empreinte carbone et adopter des pratiques de mobilité plus durables. Grâce au
                    covoiturage électrique, nous construisons un réseau de conducteurs et de passagers qui soutiennent
                    un avenir durable.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="assets/img_ecolo/commu_eco.jpg" class="featurettez-image img rounded circle
                " width="500"
                    height="500" alt="Communauté écologique">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Notre impact, votre avenir. <span class="text-muted">Réduisez les
                        émissions dès aujourd'hui.</span></h2>
                <p class="lead">En adoptant le covoiturage électrique, vous faites partie de la solution. Réduisez les
                    émissions de CO2 tout en voyageant de manière économique et conviviale. Avec EcoRide, chaque trajet
                    compte pour un avenir plus sain.</p>
            </div>
            <div class="col-md-5">
                <img src="assets/img_ecolo/co2.jpg" class="featurette-image img rounded circle" width="500" height="500"
                    alt="Réduction des émissions de carbone">
            </div>
        </div>

        <hr class="featurette-divider">
    </div>
</main>

<?php require_once('templates/footer.php'); ?>