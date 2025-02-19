<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>



    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #a3d9a5;
            color: #495057;
        }

        .sidebar a {
            color: rgb(26, 28, 31);
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>





    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center py-3">Admin Dashboard</h4>
        <a href="#">Utilisateur</a>
        <a href="#">credits</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Bienvenue</h1>

            </div>



            <!-- Table -->

            <div class="container mt-5">
                <h1 class="text-center">Panel Admin - Covoiturage</h1>

                <!-- Gestion des Utilisateurs -->
                <div class="card my-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Utilisateurs</h2>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal">Ajouter</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Date de Naissance</th>
                                    <th>Pseudo</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jean</td>
                                    <td>Dupont</td>
                                    <td>jean@example.com</td>
                                    <td>0123456789</td>
                                    <td>Paris</td>
                                    <td>1990-05-12</td>
                                    <td>JeanD</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jean</td>
                                    <td>Dupont</td>
                                    <td>jean@example.com</td>
                                    <td>0123456789</td>
                                    <td>Paris</td>
                                    <td>1990-05-12</td>
                                    <td>JeanD</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jean</td>
                                    <td>Dupont</td>
                                    <td>jean@example.com</td>
                                    <td>0123456789</td>
                                    <td>Paris</td>
                                    <td>1990-05-12</td>
                                    <td>JeanD</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jean</td>
                                    <td>Dupont</td>
                                    <td>jean@example.com</td>
                                    <td>0123456789</td>
                                    <td>Paris</td>
                                    <td>1990-05-12</td>
                                    <td>JeanD</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Gestion des Chauffeurs -->
                <div class="card my-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Chauffeurs</h2>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDriverModal">Ajouter</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Date de Naissance</th>
                                    <th>Pseudo</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul</td>
                                    <td>Martin</td>
                                    <td>paul@example.com</td>
                                    <td>0987654321</td>
                                    <td>Lyon</td>
                                    <td>1985-08-22</td>
                                    <td>PaulM</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul</td>
                                    <td>Martin</td>
                                    <td>paul@example.com</td>
                                    <td>0987654321</td>
                                    <td>Lyon</td>
                                    <td>1985-08-22</td>
                                    <td>PaulM</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul</td>
                                    <td>Martin</td>
                                    <td>paul@example.com</td>
                                    <td>0987654321</td>
                                    <td>Lyon</td>
                                    <td>1985-08-22</td>
                                    <td>PaulM</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul</td>
                                    <td>Martin</td>
                                    <td>paul@example.com</td>
                                    <td>0987654321</td>
                                    <td>Lyon</td>
                                    <td>1985-08-22</td>
                                    <td>PaulM</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul</td>
                                    <td>Martin</td>
                                    <td>paul@example.com</td>
                                    <td>0987654321</td>
                                    <td>Lyon</td>
                                    <td>1985-08-22</td>
                                    <td>PaulM</td>
                                    <td><img src="photo.jpg" width="40"></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

                <!-- Gestion des Covoiturages -->
                <div class="card my-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Covoiturages</h2>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCovoitModal">Ajouter</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Conducteur</th>
                                    <th>Départ</th>
                                    <th>Arrivée</th>
                                    <th>Date Départ</th>
                                    <th>Date Arrivée</th>
                                    <th>Statut</th>
                                    <th>Places</th>
                                    <th>Prix</th>
                                    <th>Immatriculation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">En cours</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">Complete</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">en cours</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">En cours</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">Annuler</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">Disponible</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul Martin</td>
                                    <td>Paris</td>
                                    <td>Lyon</td>
                                    <td>2025-03-01</td>
                                    <td>2025-03-01</td>
                                    <td><span class="badge bg-success">En cours</span></td>
                                    <td>3</td>
                                    <td>20€</td>
                                    <td>AB-123-CD</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Modifier</button>
                                        <button class="btn btn-danger btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                            </tbody>

                        </table>


                    </div>
                </div>



                <!-- Modale Ajouter Utilisateur -->
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter Utilisateur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <input type="text" class="form-control mb-2" placeholder="Nom">
                                    <input type="email" class="form-control mb-2" placeholder="Email">
                                    <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modale Ajouter Covoiturage -->
                <div class="modal fade" id="addCovoitModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter Covoiturage</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <input type="text" class="form-control mb-2" placeholder="Conducteur">
                                    <input type="text" class="form-control mb-2" placeholder="Destination">
                                    <input type="date" class="form-control mb-2">
                                    <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>