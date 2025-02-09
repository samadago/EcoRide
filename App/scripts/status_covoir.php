// app/scripts/trip_status.php
<?php
require_once __DIR__ . '/../libs/pdo.php';
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'driver') {
    http_response_code(403);
    die("Accès refusé");
}

$data = json_decode(file_get_contents('php://input'), true);
$action = $data['action']; // 'start' ou 'complete'
$trip_id = $data['trip_id'];

try {
    $valid_status = [
        'start' => 'en_cours',
        'complete' => 'termine'
    ];

    $stmt = $pdo->prepare("UPDATE covoiturage SET statut = ? WHERE covoiturage_id = ? AND conducteur_id = ?");
    $stmt->execute([$valid_status[$action], $trip_id, $_SESSION['user']['utilisateur_id']]);

    if ($action === 'complete') {
        // Envoyer les emails et gérer les avis
        // (À implémenter avec un service d'email)
    }

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}


?>

<body>
    <header class="bg-success text-white py-3 mb-4">
        <div class="container text-center">
            <h1>Statut du Covoitureur</h1>
        </div>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="h5 mb-3">Votre Trajet</h2>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <p class="mb-1"><strong>Départ :</strong> Paris</p>
                                <p class="mb-1"><strong>Arrivée :</strong> Lyon</p>
                                <p class="mb-1"><strong>Date :</strong> 2025-02-01</p>
                            </div>
                            <div>
                                <span class="status-badge status-en-attente">en attente</span>
                            </div>
                        </div>

                        <hr>

                        <h2 class="h5 mb-3">Actions</h2>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary" id="startTripBtn">Démarrer</button>
                            <button class="btn btn-success" id="completeTripBtn" disabled>Terminer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>