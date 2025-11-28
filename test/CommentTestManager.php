<?php

// typage strict
declare(strict_types=1);

// démarrage de la session
session_start();

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require '../src/' .$class . '.php';
});

use model\manager\CommentManager;

// chargement du config
if(file_exists("../config.prod.php")){
    require_once "../config.prod.php";
} else {
    
    require_once "../config.dev.php";
}

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
    die($e->getMessage());
}

$manageComment = new CommentManager($pdo);

$recup = $manageComment->getAllComments();

var_dump($recup);