<?php 

use Model\manager\UserManager;
use Model\mapping\UserMapping;
use Model\service\MailManager;

$manageUser = new UserManager($pdo);

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
            case 'connexion':


                    require_once PATH. "/src/View/connexion.php";
                break;
            case 'tokenVerif':
                if (isset($_GET['token'])) {
                    $verifToken = $manageUser->findByToken($_GET['token']);
                    $emailtoken = $verifToken->getEmailToken();
                
                    if ($emailtoken === $_GET['token']) {
                        if ($manageUser->confirmEmail($verifToken) === true) {
                            header("Location:./");
                            exit();
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
                    require_once PATH. "/src/View/inscription.php";
                break;
            case 'about':
                require_once PATH. "/src/View/about.php";
                break;
            case 'contact':
                    require_once PATH. "/src/View/contact.php";
                    break;
            case 'construct':
                    require_once PATH. "/src/View/construction.php";
                    break;
            case 'recette':
                        if (isset($_GET['recette'])) {
                            switch ($_GET['recette']) {
                                case '1':
                                    require_once PATH. "/src/View/agim/recette1.php";

                                    break;
                                
                                case '2':
                                    require_once PATH. "/src/View/agim/recette2.php";
                                    break;
                                
                                case '3':
                                    require_once PATH. "/src/View/massine/recette3.php";
                                    break;
                                
                                case '4':
                                    require_once PATH. "/src/View/massine/recette4.php";
                                    break;
                                
                                case '5':
                                    require_once PATH. "/src/View/soulaiman/recette5.php";
                                    break;
                                
                                case '6':
                                    require_once PATH. "/src/View/soulaiman/recette6.php";
                                    break;
                                
                                default:
                                    require_once PATH. "/src/View/error.404.php";

                                    break;
                            }
                        } 
                break;
        
        default:
            require_once PATH. "/src/View/error.404.php";

            break;
    }
} else {
    require_once PATH. "/src/View/home.php";

}