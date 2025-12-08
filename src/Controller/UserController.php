<?php

use Model\service\MailManager;
use Model\manager\UserManager;
use Model\mapping\UserMapping;

use Model\manager\RecipeManager;
use Model\mapping\RecipeMapping;

use model\manager\CommentManager;
use model\mapping\CommentMapping;
use model\manager\ContactManager;
use model\mapping\ContactMapping;



require_once PATH . "/src/Model/Utilities.php";

$manageUser = new UserManager($pdo);
$manageComment = new CommentManager($pdo);
$manageRecipe = new RecipeManager($pdo);
$manageContact = new ContactManager($pdo);

$erreur = "";
$success = "";

if (isset($_GET['pg'])) {


    switch ($_GET['pg']) {

        case 'about':
            require_once PATH . "/src/View/about.php";
            break;
        case 'contact':
            if (isset($_POST['validation'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                    $contact = new ContactMapping($_POST);
                    if ($contact->isValid()) {
                        $result = $manageContact->insertComment($contact);
                        if ($result === true) {
                            try {
                                $confirmMail = new MailManager;
                                $mailSent = $confirmMail->sendMessageContact($contact);
                                if ($mailSent) {
                                    $success .= "<p style='color:green;'>Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.</p>";
                                } else {
                                    $success .= "<p style='color:green;'>Votre message a été enregistré avec succès. Un problème est survenu lors de l'envoi de l'email de confirmation.</p>";
                                }
                            } catch (Exception $e) {
                                $success .= "<p style='color:green;'>Votre message a été enregistré avec succès. Un problème est survenu lors de l'envoi de l'email de confirmation.</p>";
                            }
                        } else {
                            $erreur .= $result;
                        }
                    } else {
                        $errors = $contact->getErrors();
                        foreach ($errors as $error) {
                            $erreur .= "<p style='color:red;'>" . $error . "</p>";
                        }
                    }
                } else {
                    $erreur .= "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
                }
            }
            require_once PATH . "/src/View/contact.php";
            break;
        case 'construction':
            require_once PATH . "/src/View/construction.php";
            break;
        case 'recette':
            if (isset($_GET['recette'])) {
                $recetteId = $_GET['recette'];
                $recette = $manageRecipe->getRecipeById((int)$recetteId);

                $readComment = gestionCommentaire($manageComment, $recetteId, $erreur, $success);
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

            $slugs = $manageRecipe->getAllRecipes();


            if (isset($_GET['slug'])) {

                $files = [
                    'agim',
                    'massine',
                    'soulaiman'
                ];

                foreach ($slugs as $value) {
                    if ($_GET['slug'] === $value->getSlug() && ($value->getId() === 1 || $value->getId() === 2)) {
                        $recetteId = $value->getId();
                        $recette = $manageRecipe->getRecipeById($recetteId);
                        $readComment = gestionCommentaire($manageComment, $recetteId, $erreur, $success);
                        $readRatting = $manageComment->getRatingByRecipe($recetteId);
                        $readTop3Ratting = $manageComment->getTop3Ratings($recetteId);
                        require_once PATH . "/src/View/" . $files[0] . "/recette" . $recetteId . ".php";
                    }
                    if ($_GET['slug'] === $value->getSlug() && ($value->getId() === 3 || $value->getId() === 4)) {
                        $recetteId = $value->getId();
                        $recette = $manageRecipe->getRecipeById($recetteId);
                        $readComment = gestionCommentaire($manageComment, $recetteId, $erreur, $success);
                        $readRatting = $manageComment->getRatingByRecipe($recetteId);
                        $readTop3Ratting = $manageComment->getTop3Ratings($recetteId);
                        require_once PATH . "/src/View/" . $files[1] . "/recette" . $recetteId . ".php";
                    }
                    if ($_GET['slug'] === $value->getSlug() && ($value->getId() === 5 || $value->getId() === 6)) {
                        $recetteId = $value->getId();
                        $recette = $manageRecipe->getRecipeById($recetteId);
                        $readComment = gestionCommentaire($manageComment, $recetteId, $erreur, $success);
                        $readRatting = $manageComment->getRatingByRecipe($recetteId);
                        $readTop3Ratting = $manageComment->getTop3Ratings($recetteId);
                        require_once PATH . "/src/View/" . $files[2] . "/recette" . $recetteId . ".php";
                    }
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
    $commentsData = $manageComment->getBestRateComment();
    $chunks = array_chunk($commentsData, 3);

    $top3 = $manageComment->getTop3RatedRecipes();
    require_once PATH . "/src/View/home.php";
}
