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


# Routage principal
if (isset($_SESSION['user']) && $_SESSION['user'] === true) {
    require_once PATH."/src/Controller/UserController.php";
} else {
    require_once PATH."/src/Controller/PublicController.php";
}

$pdo = null;