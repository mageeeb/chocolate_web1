<?php 

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
            case 'connexion':
                    require_once PATH. "/src/View/connexion.php";
                break;
                            case 'inscription':
                                
                    require_once PATH. "/src/View/inscription.php";
                break;
            case 'about':
                require_once PATH. "/src/View/about.php";
                break;
            case 'contact':
                    require_once PATH. "/src/View/contact.php";
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
                        } else {
                            require_once PATH. "/src/View/construction.php";
                        }
                break;
        
        default:
            require_once PATH. "/src/View/error.404.php";

            break;
    }
} else {
    require_once PATH. "/src/View/home.php";

}