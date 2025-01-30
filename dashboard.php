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
        <a href="admin_panel.php">Admin Panel</a>
        <a href="#">Employe</a>
        <a href="#">Chauffeur</a>
        <a href="#">credits</a>
        <a href="#">covoiturages</a>
        <a href="#">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Bienvenue, Admin</h1>
                <button class="btn btn-success">Ajouter le nouveau</button>
            </div>

            <!-- Statistics -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text fs-3">5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">voiture</h5>
                            <p class="card-text fs-3">15</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Place</h5>
                            <p class="card-text fs-3">3</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Prix</h5>
                            <p class="card-text fs-3">20€</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="card mt-4">
                <div class="card-header">
                    Ajouts recents
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Chauffeur</th>
                                <th>Immatriculation</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lili</td>
                                <td>#12345</td>
                                <td><span class="badge bg-success">Complet</span></td>
                                <td>20€</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>David</td>
                                <td>#12346</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mike</td>
                                <td>#12347</td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                                <td>15€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>