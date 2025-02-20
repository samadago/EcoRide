<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="assets/img_ecolo/logo_eco.png" />
    <title>Covoiturage écologique

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="margin-right:10px;" class="logo">
                    <img src="assets/img_ecolo/logo_eco.png" alt="logo" style="width:80px;" class="rounded-pill" />
                    <a href="index.php" class="logo"><span>Eco</span>Ride</a>

                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>

                            <li class="nav-item"><a href="signIn.php" class="nav-link">Connexion</a></li>
                            <li class="nav-item"><a href="logout.php" class="nav-link">Deconnexion</a></li>
                        </ul>




                    </div>

            </div>
        </nav>
    </header>


    <body>









        <!-- Main Content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3">Bienvenue Admin</h1>

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

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Durand</td>
                                        <td>Employé</td>
                                        <td>durand.employe@ecoride.fr</td>
                                        <td>0623456789</td>
                                        <td>Paris</td>
                                        <td>1995-06-15</td>
                                        <td>Dudu</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Jean</td>
                                        <td>Dupont</td>
                                        <td>dupont.employe@ecoride.com</td>
                                        <td>0623456789</td>
                                        <td>Paris</td>
                                        <td>1991-05-12</td>
                                        <td>JiJi</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>


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
                                        <td>Sophie</td>
                                        <td>Chauffeur</td>
                                        <td>sophie.chauffeur@gmail.com</td>
                                        <td>0623456789</td>
                                        <td>Lyon</td>
                                        <td>1988-05-25</td>
                                        <td>Soso</td>
                                        <td><img src="assets/img_ecolo/sophie.jpg" width="40"></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>David</td>
                                        <td>Chauffeur</td>
                                        <td>david.chauffeur@gmail.com</td>
                                        <td>0615121512</td>
                                        <td>Marseille</td>
                                        <td>1999-11-11</td>
                                        <td>Dave</td>
                                        <td><img src="assets/img_ecolo/david.jpg" width="40"></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>Marc</td>
                                        <td>Chauffeur</td>
                                        <td>marc.chauffeur@gmail.com</td>
                                        <td>0610131415</td>
                                        <td>Paris </td>
                                        <td>1979-04-08</td>
                                        <td>Max</td>
                                        <td><img src="assets/img_ecolo/marc.jpg" width="40"></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td>David</td>
                                        <td>Chauffeur</td>
                                        <td>david.chauffeur@gmail.com</td>
                                        <td>0615121512</td>
                                        <td>Marseille</td>
                                        <td>1999-11-11</td>
                                        <td>Dave</td>
                                        <td><img src="assets/img_ecolo/david.jpg" width="40"></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>Sophie</td>
                                        <td>Chauffeur</td>
                                        <td>sophie.chauffeur@gmail.com</td>
                                        <td>0623456789</td>
                                        <td>Lyon</td>
                                        <td>1988-05-25</td>
                                        <td>Soso</td>
                                        <td><img src="assets/img_ecolo/sophie.jpg" width="40"></td>
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
                                        <td>Sophie</td>
                                        <td>Paris</td>
                                        <td>Lyon</td>
                                        <td>2025-03-25</td>
                                        <td>2025-03-25</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>2</td>
                                        <td>20€</td>
                                        <td>eg-020-fr</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>

                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>David</td>
                                        <td>Marseille</td>
                                        <td>Nice</td>
                                        <td>2025-03-10</td>
                                        <td>2025-03-10</td>
                                        <td><span class="badge bg-success">Disponible</span></td>
                                        <td>2</td>
                                        <td>15€</td>
                                        <td>eg-050-fr</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>Marc</td>
                                        <td>Paris</td>
                                        <td>Lille</td>
                                        <td>2025-03-05</td>
                                        <td>2025-03-05</td>
                                        <td><span class="badge bg-success">En cours</span></td>
                                        <td>2</td>
                                        <td>12€</td>
                                        <td>eg-035-fr</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td>Sophie</td>
                                        <td>Bordeaux</td>
                                        <td>Nice</td>
                                        <td>2025-03-16</td>
                                        <td>2025-03-16</td>
                                        <td><span class="badge bg-success">Complete</span></td>
                                        <td>2</td>
                                        <td>17€</td>
                                        <td>eg-045-fr</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Modifier</button>
                                            <button class="btn btn-danger btn-sm">Supprimer</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>David</td>
                                        <td>Toulouse</td>
                                        <td>Lyon</td>
                                        <td>2025-03-13</td>
                                        <td>2025-03-13</td>
                                        <td><span class="badge bg-success">en cours</span></td>
                                        <td>3</td>
                                        <td>25€</td>
                                        <td>eg-060-fr</td>
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
                                        <input type="text" class="form-control mb-2" placeholder="Prenom">
                                        <input type="email" class="form-control mb-2" placeholder="Email">
                                        <input type="telephone" class="form-control mb-2" placeholder="Telephone">
                                        <input type="text" class="form-control mb-2" placeholder="Date de naissance">
                                        <input type="text" class="form-control mb-2" placeholder="Adresse">
                                        <input type="date" class="form-control mb-2" placeholder="Date de naissance">
                                        <input type="image" class="form-control mb-2" placeholder="Photo">
                                        <input type="text" class="form-control mb-2" placeholder="Pseudo">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Sélectionner un rôle</label>
                                            <select class="form-select" name="role" required>




                                                <option value="utilisateur">Admin</option>
                                                <option value="utilisateur">Utilisateur</option>

                                            </select>
                                        </div>
                                        <button type="submit" name="addUser" id="btnAddUser" class="btn btn-lg my-5" disabled> Valider </button>
                                    </form>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modale Ajouter Chauffeurs -->
                <div class="modal fade" id="addDriverModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter Chauffeurs</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <input type="text" class="form-control mb-2" placeholder="Nom">
                                    <input type="text" class="form-control mb-2" placeholder="Prenom">
                                    <input type="email" class="form-control mb-2" placeholder="Email">
                                    <input type="telephone" class="form-control mb-2" placeholder="Telephone">
                                    <input type="text" class="form-control mb-2" placeholder="Date de naissance">
                                    <input type="text" class="form-control mb-2" placeholder="Adresse">
                                    <input type="date" class="form-control mb-2" placeholder="Date de naissance">
                                    <input type="image" class="form-control mb-2" placeholder="Photo">
                                    <input type="text" class="form-control mb-2" placeholder="Pseudo">
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
                                    <input type="text" class="form-control mb-2" placeholder="Covoiturage">
                                    <input type="date" class="form-control mb-2" placeholder="Date de depart">
                                    <input type="heure" class="form-control mb-2" placeholder="Heure de depart">
                                    <input type="text" class="form-control mb-2" placeholder="Lieu de depart">
                                    <input type="date" class="form-control mb-2" placeholder="Date d'arrive">
                                    <input type="heure" class="form-control mb-2" placeholder="heure d'arrive">
                                    <input type="text" class="form-control mb-2" placeholder="Lieu d'arrive">
                                    <input type="text" class="form-control mb-2" placeholder="Statut">
                                    <input type="text" class="form-control mb-2" placeholder="Nombre de place">
                                    <input type="text" class="form-control mb-2" placeholder="Prix">
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