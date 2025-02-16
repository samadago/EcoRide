# EcoRide - Covoiturage Écologique

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

![EcoRide Banner](assets/images/banner.jpg)

Une application web de covoiturage écologique pour connecter passagers et conducteurs engagés.

## 📖 Description

EcoRide est une plateforme de covoiturage qui permet :
- 🔍 Aux passagers de trouver des trajets écologiques
- 🚗 Aux conducteurs de proposer leurs trajets
- 📊 Une interface de gestion pour les employés
- ♻️ Une réduction de l'empreinte carbone des déplacements

## 🛠 Technologies

**Frontend:**  
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white)

**Backend:**  
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)

**Bases de données:**  
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=flat&logo=mongodb&logoColor=white)

**Outils:**  
![WAMP](https://img.shields.io/badge/WAMP-FF6600?style=flat)
![Git](https://img.shields.io/badge/Git-F05032?style=flat&logo=git&logoColor=white)

## 🚀 Installation

### Prérequis
- WAMP/XAMPP installé
- PHP 7.4+
- Comptes MongoDB Atlas/Compass

### Étapes d'installation
1. Cloner le dépôt :
```bash
git clone https://github.com/samadago/EcoRide
```
2. Configurer WAMP :
Placer le projet dans wamp64/www/
Démarrer Apache et MySQL

3. Base de données MySQL :
```bash
mysql -u root -p < covoiturage_bd.sql
```

4. Démarrer l'application :
http://localhost/EcoRide/public/

## 🚀 Déploiement sur Hostinger avec Docker Compose

### Prérequis
- Compte Hostinger 
- VPS 
- Docker et Docker Compose installés
- Client SSH (pour la connexion au serveur)

### Étapes de déploiement

1. **Connexion au serveur Hostinger**
    ```bash
    ssh root@ip_vps_hostinger
    ```

2. **Build de l'image docker en local**
    ```bash
    docker build -t samadago/ecoride:1.0.0
    ```
    > La version de l'image doit s'incrémenter a chaque montée de version de l'application.

3. **Lancement du fichier `docker-compose.yml`**
    ```bash
    docker compose up -d
    ```
### Post-déploiement

- Configurer le DNS dans le panel Hostinger
- Activer SSL via Let's Encrypt
- Tester l'application : https://votre-domaine.com


## 📖 Utilisation

Rôles disponibles :

- Visiteur : Consulter les trajets
- Passager : Réserver des trajets
- Conducteur : Publier/gérer des trajets 
- Admin : Gestion complète

📚 Consulter le Manuel d'utilisation pour plus de détails.

## 🤝 Contribution

Les contributions sont les bienvenues !
Procédure :

- Forker le projet
- Créer une branche (git checkout -b feature/AmazingFeature)
- Commiter les changements (git commit -m 'Add some AmazingFeature')
- Pusher (git push origin feature/AmazingFeature)
- Ouvrir une Pull Request

