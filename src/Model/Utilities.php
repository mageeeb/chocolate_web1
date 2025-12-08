
<?php

use model\mapping\CommentMapping;

function gestionCommentaire($manageComment, $recetteId, &$erreur, &$success)
{
    if (isset($_POST['validation'])) {
        if (!empty($_POST['content'])) {
            try {
                $comment = new CommentMapping($_POST);
                $comment->setRecipeId($recetteId);
                $insertComment = $manageComment->insertComment($comment);
                if ($insertComment === true) {
                    // Utiliser une variable de session pour le message de succès après redirection
                    $_SESSION['comment_success'] = "<p style='color:green;'>Votre commentaire a été ajouté avec succès !</p>";
                    header("Location: ./?pg=recette&recette={$recetteId}");
                    exit();
                } else {
                    // $insertComment contient déjà le message d'erreur formaté
                    $erreur .= $insertComment;
                }
            } catch (Exception $e) {
                $erreur .= "<p style='color:red;'>Erreur lors de l'ajout du commentaire. Veuillez réessayer.</p>";
            }
        } else {
            $erreur .= "<p style='color:red;'>Veuillez remplir le formulaire de commentaire.</p>";
        }
    }

    // Vérifier s'il y a un message de succès en session (après redirection)
    if (isset($_SESSION['comment_success'])) {
        $success = $_SESSION['comment_success'];
        unset($_SESSION['comment_success']);
    }

    return $manageComment->getAllCommentsByRecipeId($recetteId);
}
