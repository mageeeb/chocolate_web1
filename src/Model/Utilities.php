
<?php

use model\mapping\CommentMapping;

function gestionCommentaire($manageComment, $recetteId, &$erreur)
{
    if (isset($_POST['validation'])) {
        if (!empty($_POST)) {
            $comment = new CommentMapping($_POST);
            $comment->setRecipeId($recetteId);
            $insertComment = $manageComment->insertComment($comment);
            if ($insertComment) {
                header("Location: ./?pg=recette&recette={$recetteId}");
                exit();
            } else {
                $erreur .= $insertComment;
            }
        } else {
            $erreur .= "Veuillez remplir le formulaire";
        }
    }
    return $manageComment->getAllCommentsByRecipeId($recetteId);
}
