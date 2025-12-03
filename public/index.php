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
if (!defined('BASE_URL')) {
    define('BASE_URL', $baseDir);
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require PATH . '/src/' . $class . '.php';


});
require_once PATH."/src/Controller/routeController.php";



