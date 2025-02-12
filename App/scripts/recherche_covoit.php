// app/scripts/search_trips.php
<?php
require_once __DIR__ . '/../libs/db.php';

// Récupération des paramètres
$departure = $_GET['departure'] ?? '';
$arrival = $_GET['arrival'] ?? '';
$date = $_GET['date'] ?? date('Y-m-d');
$max_price = $_GET['max_price'] ?? null;
$eco_only = $_GET['eco'] ?? false;

// Construction de la requête
$query = "SELECT c.*, u.pseudo, u.photo, v.energie, 
          (SELECT AVG(note) FROM avis WHERE conducteur_id = u.utilisateur_id) as note_moyenne
          FROM covoiturage c
          JOIN utilisateur u ON c.conducteur_id = u.utilisateur_id
          JOIN voiture v ON c.voiture_id = v.voiture_id
          WHERE c.lieu_depart LIKE :departure
          AND c.lieu_arrivee LIKE :arrival
          AND c.date_depart >= :date
          AND c.nb_places > 0";

if ($eco_only) {
    $query .= " AND v.energie = 'electrique'";
}

if ($max_price) {
    $query .= " AND c.prix_personne <= :max_price";
}

$stmt = $pdo->prepare($query);
$params = [
    ':departure' => "%$departure%",
    ':arrival' => "%$arrival%",
    ':date' => $date
];

if ($max_price) {
    $params[':max_price'] = $max_price;
}

$stmt->exe
?>
<?php require_once('../templates/header.php'); ?>

<div class="container my-5">
    <h1 class="text-center mb-4">Rechercher un covoiturage</h1>

    <!-- Formulaire de recherche -->
    <form id="searchForm" class="mb-5">
        <div class="row g-3">
            <div class="col-md-4">
                <label for="departure" class="form-label">Ville de départ</label>
                <input type="text" id="departure" name="departure" class="form-control" placeholder="Ex : Paris" required>
            </div>
            <div class="col-md-4">
                <label for="arrival" class="form-label">Ville d'arrivée</label>
                <input type="text" id="arrival" name="arrival" class="form-control" placeholder="Ex : Lyon" required>
            </div>
            <div class="col-md-4">
                <label for="date" class="form-label">Date</label>
                <input type="date" id="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
        </div>
        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="maxPrice" class="form-label">Prix maximum (€)</label>
                <input type="number" id="maxPrice" name="max_price" class="form-control" placeholder="Ex : 30">
            </div>
            <div class="col-md-4">
                <label for="eco" class="form-label">Voyage écologique</label>
                <select id="eco" name="eco" class="form-control">
                    <option value="">Tous</option>
                    <option value="1">Oui</option>
                </select>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Rechercher</button>
            </div>
        </div>
    </form>