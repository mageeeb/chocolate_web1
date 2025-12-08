<?php

use Model\manager\UserManager;
use Model\mapping\UserMapping;
use Model\service\MailManager;
use model\manager\CommentManager;
use model\mapping\CommentMapping;
use model\manager\ContactManager;
use model\mapping\ContactMapping;
use Model\manager\RecipeManager;;

require_once PATH . "/src/Model/Utilities.php";

$manageUser = new UserManager($pdo);
$manageComment = new CommentManager($pdo);
$manageContact = new ContactManager($pdo);
$manageRecipe = new RecipeManager($pdo);

$erreur = "";
$success = "";

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'connexion':
            if (isset($_GET['forgotPassword'])) {

                if (isset($_POST['validation']) && !empty($_POST['email'])) {
                    $emailUser = new UserMapping($_POST);
                    if (!$emailUser->isValid()) {
                        foreach ($emailUser->getErrors() as $error) {
                            $erreur .= "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
                        }
                    } else {
                        $user = $manageUser->getUserByEmail($emailUser->getEmail());
                        if (!is_null($user)) {
                            // inseré le token du mdp
                            $manageUser->generatePasswordToken($user);
                            $recupEmail = $manageUser->getUserByEmail($user->getEmail());
                            if (!is_null($recupEmail)) {
                                $confirmMail = new MailManager;
                                $mailSent = $confirmMail->sendResetPasswordEmail($recupEmail);
                                if ($mailSent) {
                                    $success .= "<p style='color:green;'>Un email de réinitialisation a été envoyé. Vérifiez votre boîte mail.</p>";
                                } else {
                                    $erreur .= "<p style='color:red;'>Erreur lors de l'envoi de l'email. Veuillez réessayer plus tard.</p>";
                                }
                            } else {
                                $erreur .= "<p style='color:red;'>Erreur lors de la récupération de votre compte. Veuillez réessayer.</p>";
                            }
                        } else {
                            $erreur .= "<p style='color:red;'>Cette adresse email n'existe pas dans notre base de données.</p>";
                        }
                    }
                }
                require_once PATH . "/src/View/forgotPassword.php";
            } else {
                // Récupérer le message de redirection s'il existe
                if (isset($_SESSION['redirect_message'])) {
                    $erreur .= $_SESSION['redirect_message'];
                    unset($_SESSION['redirect_message']);
                }
                if (isset($_POST['validation'])) {
                    if (!empty($_POST['login']) && !empty($_POST['password'])) {
                        $user = new UserMapping($_POST);
                        if (!$user->isValid()) {
                            foreach ($user->getErrors() as $error) {
                                $erreur .= "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
                            }
                        } else {
                            $result = $manageUser->connect($user);
                            if ($result === true) {
                                // Vérifier s'il y a une redirection en attente
                                if (isset($_SESSION['redirect_after_login'])) {
                                    $redirectUrl = $_SESSION['redirect_after_login'];
                                    unset($_SESSION['redirect_after_login']);
                                    header("Location: {$redirectUrl}");
                                    exit();
                                }
                                header('Location:./');
                                exit();
                            } else {
                                $erreur .= "<p style='color:red;'>Identifiants incorrects. Vérifiez votre login et votre mot de passe.</p>";
                            }
                        }
                    } else {
                        $erreur .= "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
                    }
                }
                require_once PATH . "/src/View/connexion.php";
            }
            break;
        case 'passwordResetForm':
            if (isset($_GET['token'])) {
                $verifToken = $manageUser->findByPasswordToken($_GET['token']);
                if (!is_null($verifToken)) {
                    $passwordtoken = $verifToken->getPwdToken();
                    if (!is_null($passwordtoken)) {
                        if (isset($_POST['validation'])) {
                            if (!empty($_POST["newPassword"]) && !empty($_POST["newPasswordConfirm"]) && $_POST["newPassword"] === $_POST["newPasswordConfirm"]) {
                                try {
                                    $verifToken->setPassword($_POST['newPassword']);
                                    $updatePassword = $manageUser->updatePassword($verifToken);
                                    if ($updatePassword) {
                                        $success .= "<p style='color:green;'>Votre mot de passe a été modifié avec succès.</p>";

                                        echo "<script>
            setTimeout(function() {
                window.close();
            }, 1500);
          </script>";
                                    } else {
                                        $erreur .= "<p style='color:red;'>Échec de la mise à jour du mot de passe. Veuillez réessayer.</p>";
                                    }
                                } catch (Exception $e) {
                                    $erreur .= "<p style='color:red;'>Erreur lors de la modification du mot de passe. Veuillez réessayer.</p>";
                                }
                            } else {
                                $erreur .= "<p style='color:red;'>Les mots de passe doivent être identiques et remplis.</p>";
                            }
                        }
                        require_once PATH . "/src/View/changePasswordForm.php";
                    } else {
                        $erreur .= "<p style='color:red;'>Votre lien est expiré ou invalide.</p>";
                        require_once PATH . "/src/View/changePasswordForm.php";
                    }
                } else {
                    $erreur .= "<p style='color:red;'>Lien de réinitialisation invalide ou expiré.</p>";
                    require_once PATH . "/src/View/changePasswordForm.php";
                }
            } else {
                $erreur .= "<p style='color:red;'>Token manquant. Veuillez utiliser le lien reçu par email.</p>";
                require_once PATH . "/src/View/changePasswordForm.php";
            }
            break;
        case 'tokenVerif':
            if (isset($_GET['token'])) {
                $verifToken = $manageUser->findByToken($_GET['token']);
                if (!is_null($verifToken)) {
                    $emailtoken = $verifToken->getEmailToken();

                    if ($emailtoken === $_GET['token']) {
                        if ($manageUser->confirmEmail($verifToken) === true) {
                            $success .= "<p style='color:green;'>Votre compte a été confirmé avec succès.</p>";

                            echo "<script>
            setTimeout(function() {
                window.close();
            }, 1500);
          </script>";
                        } else {
                            $erreur .= "<p style='color:red;'>Erreur lors de la confirmation de votre compte. Veuillez réessayer.</p>";
                        }
                    } else {
                        $erreur .= "<p style='color:red;'>Token invalide. Veuillez utiliser le lien reçu par email.</p>";
                    }
                } else {
                    $erreur .= "<p style='color:red;'>Token invalide ou expiré.</p>";
                }
            } else {
                $erreur .= "<p style='color:red;'>Token manquant.</p>";
            }
            break;
        case 'inscription':
            // Récupérer le message de redirection s'il existe
            if (isset($_SESSION['redirect_message'])) {
                $erreur .= $_SESSION['redirect_message'];
                unset($_SESSION['redirect_message']);
            }
            if (isset($_POST['validation'])) {
                if ($_POST['password'] !== $_POST['password_confirm']) {
                    $erreur .= "<p style='color:red;'>Les mots de passe doivent être identiques.</p>";
                } else {
                    if (!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                        $newUser = new UserMapping($_POST);
                        if (!$newUser->isValid()) {
                            foreach ($newUser->getErrors() as $error) {
                                $erreur .= "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
                            }
                        } else {
                            if ($manageUser->insertUser($newUser)) {
                                $confirmMail = new MailManager;
                                $mailSent = $confirmMail->sendConfirmationEmail($newUser);
                                if ($mailSent) {
                                    $success .= "<p style='color:green;'>Inscription réussie ! Un email de confirmation a été envoyé. Vérifiez votre boîte mail.</p>";
                                    // On redirige après un court délai pour afficher le message
                                    echo "<script>
                                        setTimeout(function() {
                                            window.location.href = '?pg=connexion';
                                        }, 2000);
                                    </script>";
                                } else {
                                    $success .= "<p style='color:green;'>Inscription réussie ! Un problème est survenu lors de l'envoi de l'email de confirmation. Vous pouvez vous connecter.</p>";
                                    echo "<script>
                                        setTimeout(function() {
                                            window.location.href = '?pg=connexion';
                                        }, 3000);
                                    </script>";
                                }
                            } else {
                                $erreur .= "<p style='color:red;'>L'inscription a échoué.</p>";
                            }
                        }
                    } else {
                        $erreur .= "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
                    }
                }
            }
            require_once PATH . "/src/View/inscription.php";
            break;
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
                            $confirmMail = new MailManager;
                            $mailSent = $confirmMail->sendMessageContact($contact);
                            if ($mailSent) {
                                $success .= "<p style='color:green;'>Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.</p>";
                            } else {
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
        case 'construct':
            require_once PATH . "/src/View/construction.php";
            break;
        case 'recette':
            if (isset($_GET['recette'])) {
                $recetteId = $_GET['recette'];
                $recette = $manageRecipe->getRecipeById((int)$recetteId);
                $readComment = gestionCommentaire($manageComment, $recetteId, $erreur, $success);
                $readRatting = $manageComment->getRatingByRecipe($_GET['recette']);
                $readTop3Ratting = $manageComment->getTop3Ratings($_GET['recette']);

                switch ($_GET['recette']) {
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
                        require_once PATH . "/src/View/construction.php";
                        break;

                    case '8':
                        require_once PATH . "/src/View/construction.php";
                        break;

                    case '9':
                        require_once PATH . "/src/View/construction.php";
                        break;

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
            break;

        default:
            require_once PATH . "/src/View/error.404.php";

            break;
    }
} else {
    $commentsData = $manageComment->getBestRateComment();
    $chunks = array_chunk($commentsData, 3);
    $bestPrepTime = $manageRecipe->getRecipeByPrepTime();
    $top3 = $manageComment->getTop3RatedRecipes();


    require_once PATH . "/src/View/home.php";
}
