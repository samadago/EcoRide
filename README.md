EcoRide Covoiturage

Bienvenue sur le dépôt GitHub du projet EcoRide, une application web développée pour la gestion et la visualisation des informations des Covoiturage EcoRide.

Description du Projet

EcoRide  permet aux visiteurs/Passagers de découvrir les voiture qui sont en coviturage , et offre une interface de gestion pour les employés et les Chauffeurs qui propose des trajet en mode ecologique.

Technologies Utilisées

HTML, CSS, JavaScript : Pour l'interface utilisateur.
PHP : Scripting côté serveur.
MySQL : Base de données relationnelle.
MongoDB : Base de données non relationnelle.
Bootstrap : Design responsive.


Environnement de Développement

WAMP : Serveur local Apache et MySQL.
Visual Studio Code, Cursor : Éditeurs de code.
Git : Contrôleur de version.
Mysql : Base de données non relationnel

Structure du Projet

assets/ -> Contient les documents CSS ; JavaScript ; Image et Uploads ; favicon.ico.
docs/ -> Dossier pour regrouper la gestion de projet, les diagrammes, la charte graphique et le manuel d'utilisation.
index.php -> Ce fichier redirige automatiquement vers le fichier index.php dans public.


Installation

Clonez le dépôt : git clone https://github.com/samadago/EcoRide
Configurez WAMP après l'avoir installé sur le site officiel.
Après avoir configuré WAMP, vous avez besoin de créer la variable d'environnement dans vos réglages Windows
Une fois fait, il faut aller sur l'application WAMP Control Panel et l'executer en tant qu'administrateur pour éviter tout conflit, le logiciel affichera alors plusieurs logiciels à ouvrir, ouvrez Apache (le serveur) ensuite ouvrez MySQL. Cliquez ensuite sur "Admin" sur la ligne MySQL.
La page http://localhost/phpmyadmin/ s'ouvrira sur votre navigateur par défaut ensuite cliquez sur "Importer".
Importez la base de données MySQL en utilisant le fichier EcoRide.sql qui contient tout le code SQL pour créer la BDD complète contenant ses tables et ses valeurs.
Vérifiez que la base de donnée contient bien les tables du projet. ( Télécharger le code source du projet en .zip et décompresser le tout dans un dossier nommé "zoo_arcadia" qui devra être dans votre répertoire "htdocs" qui se trouve dans le dossier "xampp" (tout dépend de où vous l'avez positionner pendant votre installation, si par défaut : le dossier se trouve dans "utilisateur" dans le Disque local).)
Ouvrez un invité de commandes : aller à la racine du projet. Télécharger le bon fichier selon votre version php. Après avoir déplacer le fichier correspondant dans le répertoire "ext" de "php", aller sur le fichier "php.ini" et chercher la ligne "extension" en utilisant la barre de recherche (raccourci CTRL+F) ajouter la ligne "extension=php_mongodb.dll".
N'oublier pas de créer une base de données et une collection MongoDB dans MongoDB Compass ou Atlas, une fois fait si vous êtes sur le port par défaut vous devrez avoir comme URI, databaseName et collections (clicks) : $uri = '"mysql://localhost:27017" ; "$databaseName = 'covoiturage';"
Vous pouvez maintenant lancez l'application via votre serveur local en utilisant l'url : http://localhost/EcoRide/index.php sur votre navigateur par défaut.

Utilisation

Naviguez dans l'application en utilisant les différents rôles pour explorer les fonctionnalités spécifiques à chaque utilisateur. Un fichier Manuel d'utilisation EcoRide.pdf est dans le dépôt Github, dans le dossier docs, il explique toutes les fonctionnalités et comment y accéder
