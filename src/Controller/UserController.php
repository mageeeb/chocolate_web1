<?php

use Model\manager\UserManager;
use Model\mapping\UserMapping;
use Model\service\MailManager;
use model\manager\CommentManager;
use model\mapping\CommentMapping;

require_once PATH. "/src/Model/Utilities.php";

$manageUser = new UserManager($pdo);
$manageComment = new CommentManager($pdo);

$erreur = "";
$success = "";

if (isset($_GET['pg'])) {


    switch ($_GET['pg']) {

        case 'about':
            require_once PATH . "/src/View/about.php";
            break;
        case 'contact':
            require_once PATH . "/src/View/contact.php";
            break;
        case 'construction':
            require_once PATH . "/src/View/constructionion.php";
            break;
        case 'recette':
            if (isset($_GET['recette'])) {
                $recetteId = $_GET['recette'];

                $readComment = gestionCommentaire($manageComment, $recetteId, $erreur);
                $readRatting = $manageComment->getRatingByRecipe($_GET['recette']);
                $readTop3Ratting = $manageComment->getTop3Ratings($_GET['recette']);
                switch ($recetteId) {
                    case '1':
                        require_once PATH . "/src/View/agim/recette1.php";
                        break;
                    case '2':
                        require_once PATH . "/src/View/agim/recette2.php";
                        break;
                    case '3':
                        require_once PATH . "/src/View/massine/recette3.php";
                        break;
                    case '4':
                        require_once PATH . "/src/View/massine/recette4.php";
                        break;
                    case '5':
                        require_once PATH . "/src/View/soulaiman/recette5.php";
                        break;
                    case '6':
                        require_once PATH . "/src/View/soulaiman/recette6.php";
                        break;
                    case '7':
                    case '8':
                    case '9':
                    case '10':
                        require_once PATH . "/src/View/construction.php";
                        break;
                    default:
                        require_once PATH . "/src/View/error.404.php";
                        break;
                }
            }
            break;


        case "deconnexion":
            $manageUser->disconnect();
            header('Location:./');
            exit();

        default:
            require_once PATH . "/src/View/error.404.php";

            break;
    }
} else {
    require_once PATH . "/src/View/home.php";
}
