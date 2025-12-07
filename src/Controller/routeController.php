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
    require_once PATH."/src/Controller/UserController.php";
} else {
    require_once PATH."/src/Controller/PublicController.php";
}


// Débogage
echo '<div class="container"><hr><h3>Barre de débogage</h3><hr>';
echo '<h4>session_id() ou SID</h4>';
print_r(session_id());
echo '<h4>$_GET</h4>';
print_r($_GET);
echo '<h4>$_SESSION</h4>';
print_r($_SESSION);
echo '<h3>$_POST</h3>';
print_r($_POST);
echo '</div>';


$pdo = null;