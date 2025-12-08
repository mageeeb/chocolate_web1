<?php

use Model\manager\UserManager;
use Model\mapping\UserMapping;
use Model\service\MailManager;
use model\manager\CommentManager;
use model\mapping\CommentMapping;
use model\manager\ContactManager;
use model\mapping\ContactMapping;


$manageUser = new UserManager($pdo);
$manageComment = new CommentManager($pdo);
$manageContact = new ContactManager($pdo);

$erreur = "";
$success = "";

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'connexion':
            if (isset($_GET['forgotPassword'])) {

                if (isset($_POST['validation']) && !empty($_POST['email'])) {
                    $emailUser = new UserMapping($_POST);
                    $user = $manageUser->getUserByEmail($emailUser->getEmail());
                    if (!is_null($user)) {
                        // inseré le token du mdp
                        $manageUser->generatePasswordToken($user);
                        $recupEmail = $manageUser->getUserByEmail($user->getEmail());
                        if (!is_null($recupEmail)) {
                            $confirmMail = new MailManager;
                            $confirmMail->sendResetPasswordEmail($recupEmail);
                        }
                        $success .= "<p style='color:green;'>verifié votre boite mail</p>";
                    } else {
                        $erreur .= "<p style='color:red;'>cette email nexiste pas</p>";
                    }
                }
                require_once PATH . "/src/View/forgotPassword.php";
            } else {
                if (isset($_POST['validation'])) {
                    if (!empty($_POST['login']) && !empty($_POST['password'])) {
                        $user = new UserMapping($_POST);
                        if ($manageUser->connect($user) === true) {
                            header('Location:./');
                            exit();
                        }
                    } else {
                        $erreur .= "<p style='color:red;'>Veuilez remplir tout les champs</p>";
                    }
                }
                require_once PATH . "/src/View/connexion.php";
            }
            break;
        case 'passwordResetForm':
            if (isset($_GET['token'])) {
                $verifToken = $manageUser->findByPasswordToken($_GET['token']);
                $passwordtoken = $verifToken->getPwdToken();
                if (!is_null($passwordtoken)) {
                    if (isset($_POST['validation'])) {
                        if (!empty($_POST["newPassword"]) && !empty($_POST["newPasswordConfirm"]) && $_POST["newPassword"] === $_POST["newPasswordConfirm"]) {
                            $verifToken->setPassword($_POST['newPassword']);
                            $updatePassword = $manageUser->updatePassword($verifToken);
                            if ($updatePassword) {
                                $success .= "Votre mot de passe a été changé";

                                echo "<script>
            setTimeout(function() {
                window.close();
            }, 1500);
          </script>";
                            } else {
                                $error .= "Echec de la mise a jour du mot de passe";
                            }
                        } else {
                            $error .= "Les mots de passe doivent etre identique";
                        }
                    }
                    require_once PATH . "/src/View/changePasswordForm.php";
                } else {
                    $error .= "Votre lien est expiré";
                }
            }
            break;
        case 'tokenVerif':
            if (isset($_GET['token'])) {
                $verifToken = $manageUser->findByToken($_GET['token']);
                $emailtoken = $verifToken->getEmailToken();

                if ($emailtoken === $_GET['token']) {
                    if ($manageUser->confirmEmail($verifToken) === true) {
                        $success .= "Votre compte est confirmé";

                        echo "<script>
            setTimeout(function() {
                window.close();
            }, 1500);
          </script>";
                    }
                }
            }
        case 'inscription':
            if (isset($_POST['validation'])) {
                if ($_POST['password'] !== $_POST['password_confirm']) {
                    echo "les champ mdp doivent etre identique";
                } else {
                    if (!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                        $newUser = new UserMapping($_POST);
                        if ($manageUser->insertUser($newUser)) {
                            $confirmMail = new MailManager;
                            $confirmMail->sendConfirmationEmail($newUser);
                            header("Location:?pg=connexion");
                            exit();
                        } else {
                            echo "inscription echoué";
                        }
                    } else {
                        echo "remplis tout les champs";
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
                            $confirmMail->sendMessageContact($contact);
                            $success .= "<p style='color:green;'>Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.</p>";
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
            break;

        default:
            require_once PATH . "/src/View/error.404.php";

            break;
    }
} else {
    $top3 = $manageComment->getTop3Ratings();

    // Récupération des commentaires avec utilisateurs et recettes
    $commentsData = $manageComment->getCommentsWithUsersAndRecipes(10);

    // Création des chunks pour le carousel desktop (3 commentaires par slide)
    $chunks = [];
    if (!empty($commentsData)) {
        for ($i = 0; $i < count($commentsData); $i += 3) {
            $chunks[] = array_slice($commentsData, $i, 3);
        }
    }

    // Initialisation des variables si vides pour éviter les erreurs dans la vue
    if (empty($top3)) {
        $top3 = [];
    }
    if (empty($commentsData)) {
        $commentsData = [];
    }
    if (empty($chunks)) {
        $chunks = [];
    }

    require_once PATH . "/src/View/home.php";
}
