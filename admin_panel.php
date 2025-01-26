<div class="container">
    <div class="admin-header text-center">
        <h1>Admin Panel</h1>
    </div>

    <div class="mt-4 text-center">
        <p>Bienvenue sur le Panel Admin. on gere les utilisateurs et leurs roles.</p>
        <a href="signIn.php" class="btn btn-success admin-btn">Administrateur</a>
    </div>
</div>


<div id="admin-signin" class="container mt-5 d-none">
    <div class="signin-header">
        <a class="navbar-brand" href="index.php" style="margin-right:10px;" class="logo">
            <img src="assets/img_ecolo/logo_eco.png" alt="logo" style="width:80px;" class="rounded-pill" />
    </div>
    <div class="mt-4">
        <h2 class="text-center">Connexion Administrateur</h2>
        <main class="form-signin w-100 m-auto">
            <form>
                <div class="form-paper">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Adresse e-mail</label>
                </div>
                <div class="form-panel">
                    <input type="password" class="form-control" id="panelPassword" placeholder="Password">
                    <label for="panelPassword">Mot de passe</label>
                </div>
                <button class="btn btn-success-- w-100 py-2" type="submit">Se connecter</button>
            </form>
        </main>
    </div>
</div>