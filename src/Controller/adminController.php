<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'recipes':
            require_once RACINE_PATH."/src/Controller/adminController/RecipeController.php";
            break;
        case 'users':
            require_once RACINE_PATH."/src/Controller/adminController/UserController.php";
            break;
        case 'comments':
            require_once RACINE_PATH."/src/Controller/adminController/CommentController.php";
            break;
        case 'images':
            require_once RACINE_PATH."/src/Controller/adminController/ImageController.php";
            break;
        case 'ingredients':
            require_once RACINE_PATH."/src/Controller/adminController/IngredientController.php";
            break;
        default:
            require_once RACINE_PATH."/src/View/backend/dashboard.back.php";
            break;
    }
} else {
    require_once RACINE_PATH."/src/View/backend/dashboard.back.php";
}