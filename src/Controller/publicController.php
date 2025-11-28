<?php

echo "<a href='?pg=inscription'>inscription</a>";

use Model\manager\UserManager;
use Model\mapping\UserMapping;

$userManager = new UserManager($pdo);

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'inscription':
            if (isset($_POST['name'],$_POST['login'],$_POST['email'],$_POST['password'])) {
                $newUser = new UserMapping($_POST);

                if($newUser){
                    $userManager->insertUser($newUser);
                    header('Location:./');
                    exit();
                }

            }
            require_once RACINE_PATH."/src/View/inscription.php";
            break;
        
        default:

            break;
    }
} else {

}
