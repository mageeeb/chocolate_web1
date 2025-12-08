<?php

# Connexion PDO
try {
    $pdo = new PDO(
        DB_TYPE . ':host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET,
        DB_USER,
        DB_PWD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();


# Routage principal
if (isset($_SESSION['is_verified']) && $_SESSION['is_verified'] === 1) {
    require_once __DIR__ . "/UserController.php";
} else {
    require_once __DIR__ . "/publicController.php";
}




$pdo = null;