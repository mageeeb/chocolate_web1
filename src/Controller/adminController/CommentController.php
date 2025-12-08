<?php

use model\manager\CommentManager;

$manageComment = new CommentManager($pdo);

$erreur = "";
$success = "";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'list':
            $comments = $manageComment->getAllCommentsByRecipeId(0);
            require_once PATH . "/src/View/admin/list.comment.back.php";
            break;
        default:
            require_once PATH . "/src/View/admin/error.404.back.php";
            break;
    }
} else {
    $comments = $manageComment->getAllCommentsByRecipeId(0);
    require_once PATH . "/src/View/admin/list.comment.back.php";
}

