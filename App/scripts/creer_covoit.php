// app/scripts/create_trip.php
<?php
require_once __DIR__ . '/../libs/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
    $data = json_decode(file_get_contents('php://input'), true);

    // Validation des données
    $required = ['lieu_depart', 'lieu_arrivee', 'date_depart', 'prix_personne', 'voiture_id'];
    foreach ($required as $field) {
        if (!isset($data[$field])) {
            http_response_code(400);
            die("Champ manquant: $field");
        }
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO covoiturage 
            (conducteur_id, voiture_id, lieu_depart, lieu_arrivee, date_depart, prix_personne, nb_places)
            VALUES (?, ?, ?, ?, ?, ?, 
            (SELECT nb_places_dispo FROM voiture WHERE voiture_id = ?))");

        $stmt->execute([
            $_SESSION['user']['utilisateur_id'],
            $data['voiture_id'],
            $data['lieu_depart'],
            $data['lieu_arrivee'],
            $data['date_depart'],
            $data['prix_personne'],
            $data['voiture_id']
        ]);

        echo json_encode(['success' => true, 'trip_id' => $pdo->lastInsertId()]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }
}
?>

<body>
    <header class="bg-success text-white py-3">
        <div class="container text-center">
            <h1>Créer un Nouveau Trajet</h1>
        </div>
    </header>

    <main class="container">
        <div class="form-container">
            <form method="POST" action="handleCreateTrip.php">
                <h2 class="h4 mb-4 text-center">Informations sur le Trajet</h2>

                <div class="mb-3">
                    <label for="lieu_depart" class="form-label">Point de départ</label>
                    <input type="text" class="form-control" id="lieu_depart" name="lieu_depart" placeholder="Ex : Paris" required>
                </div>

                <div class="mb-3">
                    <label for="lieu_arrivee" class="form-label">Point d'arrivée</label>
                    <input type="text" class="form-control" id="lieu_arrivee" name="lieu_arrivee" placeholder="Ex : Lyon" required>
                </div>

                <div class="mb-3">
                    <label for="date_depart" class="form-label">Date et heure de départ</label>
                    <input type="datetime-local" class="form-control" id="date_depart" name="date_depart" required>
                </div>

                <div class="mb-3">
                    <label for="prix_personne" class="form-label">Prix par personne (€)</label>
                    <input type="number" class="form-control" id="prix_personne" name="prix_personne" placeholder="Ex : 20" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="nb_places" class="form-label">Nombre de places disponibles</label>
                    <input type="number" class="form-control" id="nb_places" name="nb_places" placeholder="Ex : 3" min="1" max="10" required>
                </div>

                <div class="mb-3">
                    <label for="type_vehicule" class="form-label">Type de véhicule</label>
                    <select class="form-select" id="type_vehicule" name="type_vehicule" required>
                        <option value="" disabled selected>Choisissez un type de véhicule</option>
                        <option value="berline">Berline</option>
                        <option value="SUV">SUV</option>
                        <option value="citadine">Citadine</option>
                        <option value="monospace">Monospace</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="commentaires" class="form-label">Commentaires (facultatif)</label>
                    <textarea class="form-control" id="commentaires" name="commentaires" rows="4" placeholder="Ajoutez des détails sur le trajet (ex : autoroute, pauses prévues, etc.)"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2">Créer le Trajet</button>
            </form>
        </div>
    </main>