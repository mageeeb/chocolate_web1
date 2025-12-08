<?php

// typage strict
declare(strict_types=1);

// démarrage de la session
session_start();
require '../vendor/autoload.php';

// chargement de la config
if (file_exists("../config.prod.php")) {
    require_once "../config.prod.php";
} else {
    require_once "../config.dev.php";
}

// Détermination de l'URL de base publique (pour les assets : css, js, images, ...)
// Exemple : /chocolate_web1/public ou simplement /
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$baseDir = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');
if ($baseDir === '.') {
    $baseDir = '';
}
if (!defined('PATH')) {
    define('PATH', $baseDir);
}

// Définition de CHEMIN basée sur PATH (pour les assets)
if (!defined('CHEMIN')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $chemin = $protocol . $host . $baseDir . '/';
    define('CHEMIN', $chemin);
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $file = __DIR__ . '/../src/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});




require_once PATH."/src/Controller/routeController.php";



