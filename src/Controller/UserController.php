<?php 

use Model\manager\UserManager;
use Model\mapping\UserMapping;
use Model\service\MailManager;

$manageUser = new UserManager($pdo);

$erreur="";
$success="";

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {

            case 'about':
                require_once PATH. "/src/View/about.php";
                break;
            case 'contact':
                    require_once PATH. "/src/View/contact.php";
                    break;
            case 'construction':
                    require_once PATH. "/src/View/constructionion.php";
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
                                
                                case '7':
                                    require_once PATH. "/src/View/construction.php";
                                    break;
                                
                                case '8':
                                    require_once PATH. "/src/View/construction.php";
                                    break;
                                
                                case '9':
                                    require_once PATH. "/src/View/construction.php";
                                    break;
                                
                                case '10':
                                    require_once PATH. "/src/View/construction.php";
                                    break;
                                
                                default:
                                    require_once PATH. "/src/View/error.404.php";

                                    break;
                            }
                        } 
                break;

                case "deconnexion":
                    $manageUser->disconnect();
                    header('Location:./');
                    exit();
        
        default:
            require_once PATH. "/src/View/error.404.php";

            break;
    }
} else {
    require_once PATH. "/src/View/home.php";

}