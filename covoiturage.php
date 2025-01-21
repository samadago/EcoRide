<?php require_once('templates/header.php'); ?>


<!-- Formulaire de recherche d'itinéraires -->

<section class="container search-form">
    <h2 class="text-center my-6">Rechercher un trajet</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="GET">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Ville de départ" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Ville d'arrivée" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-success btn-block">Rechercher</button>




                    </div>
            </form>
        </div>
    </div>
</section>

<!-- Liste des covoiturages disponibles -->
<section class="container">
    <h3 class="text-center my-4">Covoiturages disponibles</h3>

    <!-- Covoiturage 1 -->
    <div class="trip-card">
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="assets/img_ecolo/chauffeur_fille.jpg" class="rounded-circle" alt="Photo du chauffeur">
                <p><strong>Liliane</strong></p>
                <p>Note: ★★★★☆</p>
            </div>
            <div class="col-md-7">
                <p><strong>Départ :</strong> Paris - 12:00</p>
                <p><strong>Arrivée :</strong> Lyon - 15:30</p>
                <p><strong>Places restantes :</strong> 2</p>
                <p class="trip-ecological">Voyage écologique</p> <!-- S'il s'agit d'une voiture électrique -->
            </div>
            <div class="col-md-3 text-right">
                <p><strong>Prix :</strong> 20€</p>
                <button class="btn btn-outline-info">Détail</button>
            </div>
        </div>
    </div>

    <!-- Covoiturage 2 -->
    <div class="trip-card">
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="assets/img_ecolo/chauffeur-boy.jpg" class="rounded-circle" alt="Photo du chauffeur">
                <p><strong>David</strong></p>
                <p>Note: ★★★★☆</p>
            </div>
            <div class="col-md-7">
                <p><strong>Départ :</strong> Marseille - 08:00</p>
                <p><strong>Arrivée :</strong> Nice - 10:30</p>
                <p><strong>Places restantes :</strong> 1</p>
                <p class="trip-non-ecological">Voyage non écologique</p> <!-- Si ce n'est pas une voiture électrique -->
            </div>
            <div class="col-md-3 text-right">
                <p><strong>Prix :</strong> 15€</p>
                <button class="btn btn-outline-info">Détail</button>
            </div>
        </div>
    </div>

   

    <!-- Si aucun covoiturage n'est disponible -->
    <div class="trip-card">
        <p>Aucun covoiturage disponible pour cette date. Veuillez modifier votre recherche.</p>
    </div>
</section>


<!-- Section des filtres de covoiturage -->
<section class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="filter-card">
                <h4>Filtres de recherche</h4>
                <form id="filtersForm">
                    <!-- Filtre Aspect écologique -->
                    <div class="form-group">
                        <label for="ecologicalFilter">Voyage écologique</label>
                        <select class="form-control" id="ecologicalFilter">
                            <option value="all">Tous</option>
                            <option value="ecological">Écologique</option>
                            <option value="non-ecological">Non écologique</option>
                        </select>
                    </div>



                    <!-- Filtre Prix maximum -->
                    <div class="form-group">
                        <label for="maxPriceCar">Prix maximum (€)</label>
                        <input type="number" class="form-control" id="maxPriceFiltr" placeholder="Prix max">
                    </div>

                    <!-- Filtre Durée maximum -->
                    <div class="form-group">
                        <label for="maxDurationFilter">Durée maximale (heures)</label>
                        <input type="number" class="form-control" id="maxDurationFilter" placeholder="Durée max">
                    </div>

                    <!-- Filtre Note minimale -->
                    <div class="form-group">
                        <label for="minRatingFilter">Note minimale</label>
                        <select class="form-control" id="minRatingFilter">
                            <option value="0">Toutes notes</option>
                            <option value="3">3 étoiles et plus</option>
                            <option value="4">4 étoiles et plus</option>
                            <option value="5">5 étoiles</option>
                        </select>
                    </div>

                    <button type="button" class="btn btn-success btn-block" onclick="applyFilters()">Appliquer les
                        filtres</button>
                </form>
            </div>
        </div>



        <div class="col-md-8">
            <!-- Liste des covoiturages filtrés -->
            <div id="tripList">
                <div class="trip-card">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="assets/img_ecolo/chauffeur%20co2.jpg" class="rounded-circle"
                                alt="Photo du chauffeur">
                            <p><strong>Marc</strong></p>
                            <p>Note: ★★★★☆</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Départ :</strong> Paris - 12:00</p>
                            <p><strong>Arrivée :</strong> Lyon - 15:30</p>
                            <p><strong>Places restantes :</strong> 2</p>
                            <p class="trip-ecological">Voyage écologique</p>
                        </div>
                        <div class="col-md-3 text-right">
                            <p><strong>Prix :</strong> 20€</p>
                            <button class="btn btn-outline-info" onclick="openDetail()">Détail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section des détails du covoiturage -->
<section class="container my-4" id="tripDetail" style="display: none;">
    <h3>Détails du covoiturage</h3>
    <div class="trip-card">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/img_ecolo/benz.jpg" class="img-fluid rounded" alt="Photo du véhicule">
            </div>
            <div class="col-md-8">
                <h4>Conducteur : Luc</h4>
                <p><strong>Modèle de voiture :</strong> Tesla Model 3</p>
                <p><strong>Type de véhicule :</strong> Électrique</p>
                <p><strong>Préférences du conducteur :</strong> Non-fumeur, Pas d'animaux</p>
                <h5>Avis des passagers</h5>
                <p>★ ★ ★ ★ ☆ - "Très bon conducteur, trajet agréable."</p>
                <p>★ ★ ★ ★ ★ - "Superbe expérience, je recommande."</p>
            </div>
        </div>
    </div>
</section>


<?php require_once('templates/footer.php'); ?>