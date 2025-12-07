<?php

use Model\manager\UserManager;
use Model\mapping\UserMapping;
use Model\service\MailManager;

$manageUser = new UserManager($pdo);

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
            require_once PATH . "/src/View/contact.php";
            break;
        case 'construction':
            require_once PATH . "/src/View/constructionion.php";
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
    require_once PATH . "/src/View/home.php";
}
