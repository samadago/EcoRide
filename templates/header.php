<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img_ecolo/logo_eco.png" />
    <title>Covoiturage Écologique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .navbar-light {
        background-color: #4CAF50;
    }

    .navbar-nav .nav-link {
        color: white !important;
    }

    .navbar-brand,
    .navbar-nav .nav-link:hover {
        color: #E8F5E9 !important;
    }

    .form-control-custom {
        background-color: #E8F5E9;
        border-radius: 25px;
        color: #388E3C;
        border: none;
        padding-left: 15px;
    }

    .form-control-custom::placeholder {
        color: #66BB6A;
    }
    </style>
</head>

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
                            <li class="nav-item"><a href="covoiturage.php" class="nav-link">Covoiturage</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        </ul>

                        <form class="d-flex mx-auto" action="recherche.php" method="GET" style="width: 300px;">
                            <input class="form-control form-control-custom" type="search" name="query"
                                placeholder="Rechercher" aria-label="Rechercher">
                        </form>

                        <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
                            <li class="nav-item"><a href="signIn.php" class="nav-link">Connexion</a></li>
                        </ul>
                    </div>

            </div>
        </nav>
    </header>