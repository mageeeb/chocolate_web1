<?php

// typage strict
declare(strict_types=1);

// démarrage de la session
session_start();
require '../vendor/autoload.php';

// chargement du config
if(file_exists("../config.prod.php")){
    require_once "../config.prod.php";
} else {
    
    require_once "../config.dev.php";
}


spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require RACINE_PATH . '/src/' . $class . '.php';


});

require_once RACINE_PATH."/src/Controller/routeController.php";



