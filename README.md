# Projet de Feedback PHP

## Description

Ce mini projet est une application web simple de collecte de feedbacks, construite en PHP avec une base de données MySQL. Les utilisateurs peuvent soumettre leurs noms, e-mails et messages via un formulaire. Les feedbacks sont ensuite affichés sur une page dédiée, dans l'ordre chronologique décroissant.

## Fonctionnalités

- **Formulaire de Soumission de Feedbacks** : Permet aux utilisateurs de soumettre leurs noms, e-mails et messages.
- **Validation des Entrées** : Vérifie que les champs requis sont remplis et que l'email est valide.
- **Insertion et Affichage des Feedbacks** : Les feedbacks sont insérés dans une base de données MySQL et affichés sur la page des feedbacks dans l'ordre décroissant par date.
- **Sécurité** : Utilisation de `PDO` pour les interactions avec la base de données, protégeant contre les injections SQL.
- **Confidentialité des Données : Les adresses e-mail des utilisateurs ne sont pas affichées publiquement pour des raisons de conformité au RGPD( ici c'est a titre d'exemple).

## Prérequis

- **Serveur Web** : Apache, Nginx, etc.
- **PHP** : Version 7.0 ou supérieure.
- **Base de Données MySQL** : Version 5.7 ou supérieure.

## Installation

1. **Cloner le Répertoire**

2. **Configuration de la Base de Données**

   - Créez une base de données MySQL nommée `site_feedback`.
   - Importez le fichier `feedbacks.sql` pour créer la table nécessaire :
     ```sql
     CREATE TABLE feedbacks (
         id INT AUTO_INCREMENT PRIMARY KEY,
         nom VARCHAR(255) NOT NULL,
         email VARCHAR(255) NOT NULL,
         message TEXT NOT NULL,
         date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

3. **Configurer les Informations de Connexion à la Base de Données**

   - Modifiez les informations de connexion à la base de données dans `db.php` :
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASSWORD', '');
     define('DB_NAME', 'site_feedback');
     ```

4. **Démarrer le Serveur Web**

## Utilisation

- Accédez à l'application via `http://localhost:port` (ou l'URL de votre serveur).
- Remplissez et soumettez le formulaire de feedback.
- Consultez les feedbacks soumis sur la page des feedbacks.

## Structure du Projet

- `index.php` : Page principale avec le formulaire de feedback.
- `feedback.php` : Page affichant tous les feedbacks.
- `db.php` : Script de connexion à la base de données.
- `partials/` : Répertoire contenant les fichiers de header et footer partagés.

## Aperçu du Projet
![aperçu](images/accueilFeedback.png)
![aperçu](images/Feedback.png)
