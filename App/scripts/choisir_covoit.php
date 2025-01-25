// app/scripts/book_trip.php
<?php
require_once __DIR__ . '/../libs/db.php';
session_start();

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    die("Non authentifié");
}

$data = json_decode(file_get_contents('php://input'), true);
$trip_id = $data['trip_id'];
$seats = $data['seats'];

try {
    $pdo->beginTransaction();

    // Vérification des places disponibles
    $stmt = $pdo->prepare("SELECT nb_places, prix_personne FROM covoiturage WHERE covoiturage_id = ? FOR UPDATE");
    $stmt->execute([$trip_id]);
    $trip = $stmt->fetch();

    if (!$trip || $trip['nb_places'] < $seats) {
        throw new Exception("Places insuffisantes");
    }

    // Déduction des crédits
    $total_cost = $seats * $trip['prix_personne'];
    $stmt = $pdo->prepare("UPDATE utilisateur SET credits = credits - ? WHERE utilisateur_id = ?");
    $stmt->execute([$total_cost, $_SESSION['user']['utilisateur_id']]);

    // Mise à jour du covoiturage
    $stmt = $pdo->prepare("UPDATE covoiturage SET nb_places = nb_places - ? WHERE covoiturage_id = ?");
    $stmt->execute([$seats, $trip_id]);

    // Création de la réservation
    $stmt = $pdo->prepare("INSERT INTO reservation (covoltuurage_id, passager_id, nb_places, credits_depenses) VALUES (?, ?, ?, ?)");
    $stmt->execute([$trip_id, $_SESSION['user']['utilisateur_id'], $seats, $total_cost]);

    $pdo->commit();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    $pdo->rollBack();
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}

?>

<main class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <th>Date</th>
                    <th>Conducteur</th>
                    <th>Prix / Personne</th>
                    <th>Places Disponibles</th>
                    <th>Note du Conducteur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tripTable">

            </tbody>
        </table>
    </div>
</main>

<div class="modal fade" id="confirmBookingModal" tabindex="-1" aria-labelledby="confirmBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmBookingModalLabel">Confirmation de réservation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Voulez-vous réserver ce trajet ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success" id="confirmBookingBtn">Confirmer</button>
            </div>
        </div>
    </div>
</div>