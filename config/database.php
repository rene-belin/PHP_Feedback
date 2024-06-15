<?php
try {
    // Définition des constantes pour les informations de connexion à la base de données
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'site_feedback');

    // Construction de la chaîne de connexion (Data Source Name)
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";

    // Création d'une instance de PDO (PHP Data Objects) pour se connecter à la base de données
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
//echo 'Connexion ok';
    // Configuration du mode d'erreur pour afficher les exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la connexion réussit, aucun message n'est affiché
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur : " . $e->getMessage();
}
?>
