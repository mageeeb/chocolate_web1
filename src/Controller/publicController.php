<?php

use Model\manager\UserManager;
use Model\manager\RecipeManager;
use Model\manager\CommentManager;
use Model\mapping\UserMapping;
use Model\mapping\CommentMapping;

$userManager = new UserManager($pdo);
$recipeManager = new RecipeManager($pdo);
$commentManager = new CommentManager($pdo);

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'inscription':
            if (isset($_POST['name'],$_POST['login'],$_POST['email'],$_POST['password'])) {
                $userData = $_POST;
                $userData['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $userData['role'] = 1;
                $userData['is_verified'] = 0;
                $userData['email_token'] = bin2hex(random_bytes(16));
                $userData['images_id'] = 1;
                
                $newUser = new UserMapping($userData);
                if($userManager->insertUser($newUser)){
                    header('Location:./');
                    exit();
                }
            }
            require_once RACINE_PATH."/src/View/inscription.php";
            break;
            
        case 'connection':
            if (isset($_POST['login'],$_POST['password'])) {
                $user = $userManager->getUserByLogin($_POST['login']);
                if ($user && password_verify($_POST['password'], $user->getPassword())) {
                    $_SESSION['user_id'] = $user->getId();
                    $_SESSION['user_name'] = $user->getName();
                    if ($user->getRole() >= 2) {
                        $_SESSION['admin'] = true;
                    }
                    header('Location:./');
                    exit();
                }
            }
            require_once RACINE_PATH."/src/View/connection.php";
            break;
            
        case 'recipe':
            if (isset($_GET['id'])) {
                $recipe = $recipeManager->getRecipeById((int)$_GET['id']);
                $comments = $commentManager->getCommentsByRecipeId((int)$_GET['id']);
            } else {
                $recipes = $recipeManager->getAllRecipes();
            }
            require_once RACINE_PATH."/src/View/recipe.php";
            break;
            
        case 'comment_form':
            if (isset($_POST['content'],$_POST['recipe_id']) && isset($_SESSION['user_id'])) {
                $commentData = [
                    'content' => $_POST['content'],
                    'recipe_id' => (int)$_POST['recipe_id'],
                    'user_id' => $_SESSION['user_id'],
                    'is_accepted' => 0
                ];
                $comment = new CommentMapping($commentData);
                $commentManager->insertComment($comment);
                header('Location:?pg=recipe&id=' . $_POST['recipe_id']);
                exit();
            }
            require_once RACINE_PATH."/src/View/comment_form.php";
            break;
            
        case 'user':
            require_once RACINE_PATH."/src/View/user.php";
            break;
            
        default:
            require_once RACINE_PATH."/src/View/homepage.php";
            break;
    }
} else {
    require_once RACINE_PATH."/src/View/homepage.php";
}