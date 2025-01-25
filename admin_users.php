<div class="text-center">

    <h2 class="m-5">Administration des utilisateurs</h2>

    <div class="administration-panel m-4">
        <div class="row justify-content-center m-0 services">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Rôle</th>
                    </tr>
                </thead>
                <tbody class="table-container" id="users">

            </table>
        </div>

        <div class="m-5">
            <a class="btn btn-primary" href="admin_addUser.php">Ajouter un utilisateur</a>
            <a class="btn btn-warning" href="admin_modifyUser.php">Modifier un utilisateur</a>
            <a class="btn btn-danger" href="admin_deleteUser.php">Supprimer un utilisateur</a>
        </div>
    </div>
</div>

<script src=""></script>

<?php
require_once('templates/footer.php');
