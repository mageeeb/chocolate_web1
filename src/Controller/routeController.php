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

# Gestion de la déconnexion
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ./');
    exit();
}

# Routage principal
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    require_once RACINE_PATH."/src/Controller/adminController.php";
} else {
    require_once RACINE_PATH."/src/Controller/publicController.php";
}

$pdo = null;