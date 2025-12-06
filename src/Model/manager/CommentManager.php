<?php

namespace model\manager;

use model\ManagerInterface;
use model\StringTrait;
use model\mapping\CommentMapping;
use model\mapping\UserMapping;
use PDO;
use Exception;

class CommentManager implements ManagerInterface
{

    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }
    // Récupération des Traits
    use StringTrait;

    // récupération de tous les commentaires
    public function getAllComments(): array
    {
        $sql = "SELECT c.*, u.`id`, u.`name`, u.`login`, r.`id`, r.`title`, r.`slug`
                FROM `comments` c
                INNER JOIN `users` u ON c.`user_id` = u.`id`
                INNER JOIN `recipe` r ON c.`recipe_id` = r.`id`
                ORDER BY c.`created_at` DESC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $comments = [];
            foreach ($result as $row) {
                $comment = new CommentMapping($row);
                $comments[] = $comment;
            }
            return $comments;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des commentaires : " . $e->getMessage();
            return [];
        }
    }

    // mise à jour de l'acceptation d'un commentaire
    public function updateCommentAcceptance(int $commentId, int $isAccepted): bool
    {
        $sql = "UPDATE `comments` SET `is_accepted` = :is_accepted WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':is_accepted', $isAccepted, PDO::PARAM_INT);
            $prepare->bindValue(':id', $commentId, PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour du commentaire : " . $e->getMessage();
            return false;
        }
    }

    // récupération de tous les commentaires acceptés pour une recette via son id
    public function getAllCommentsByRecipeId(int $recipeId): array
    {
        $sql = "SELECT *
                FROM `comments` c
                INNER JOIN `users` u ON c.`user_id` = u.`id`
                WHERE c.`recipe_id` = ?
                ORDER BY c.`created_at` ASC";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetchAll();
            $prepare->closeCursor();

            // Initialiser le tableau principal
            $commentsData = [];

            // Pour chaque ligne de résultat
            foreach ($result as $row) {
                $comment = new CommentMapping($row);
                $user = new UserMapping($row);

                // Ajouter un sous-tableau avec clés distinctes
                $commentsData[] = [
                    'comment' => $comment,  // Clé pour le commentaire
                    'user' => $user        // Clé pour l'utilisateur
                ];
            }

            return $commentsData;
        } catch (Exception $e) {
            error_log("Erreur: " . $e->getMessage());
            return [];
        }
    }
    // insertion d'un commentaire
    public function insertComment(CommentMapping $comment): bool
    {
        // si l'utilisateur n'est pas connecté
        if (!isset($_SESSION['is_verified']))
            throw new Exception("Vous devez être connecté pour poster un commentaire");

        //$isAccepted = 0; // par défaut en attente de validation

        // // si l'utilisateur est Admin, on peut publier directement
        // if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
        //     $isAccepted = 1; // publié directement

        // préparation de la requête
        $sql = "INSERT INTO `comments` (content, recipe_id, user_id, rating)
                VALUES (:content, :recipe_id,:user_id, :rating)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':content', $comment->getContent());
            $prepare->bindValue(':recipe_id', $comment->getRecipeId(), PDO::PARAM_INT);
            $prepare->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_INT);
            $prepare->bindValue(':rating', $comment->getRating());
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion du commentaire : " . $e->getMessage();
            return false;
        }
    }
    // Récupération d'un commentaire par ID
    public function getCommentById(int $commentId): ?CommentMapping
    {
        $sql = "SELECT * FROM `comments` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$commentId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new CommentMapping($result) : null;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération du commentaire : " . $e->getMessage();
            return null;
        }
    }

    // Mise à jour d'un commentaire
    public function updateComment(CommentMapping $comment): bool
    {
        $sql = "UPDATE `comments` SET `content` = :content, `is_accepted` = :is_accepted WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':id', $comment->getId(), PDO::PARAM_INT);
            $prepare->bindValue(':content', $comment->getContent());
            $prepare->bindValue(':is_accepted', $comment->getIsAccepted(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour du commentaire : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'un commentaire
    public function deleteComment(int $commentId): bool
    {
        $sql = "DELETE FROM `comments` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$commentId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression du commentaire : " . $e->getMessage();
            return false;
        }
    }

    public function getRatingByRecipe(int $recipeId): ?float
    {
        $sql = "SELECT AVG(rating) AS avg_rating
            FROM comments
            WHERE recipe_id = ?";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            if ($result && $result['avg_rating'] !== null) {
                return (int)$result['avg_rating'];
            }
            return null;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération de la moyenne : " . $e->getMessage();
            return null;
        }
    }

    public function getTop3Ratings(): array
    {
        $sql = "SELECT recipe_id, FLOOR(AVG(CAST(rating AS UNSIGNED))) AS avg_rating
            FROM comments
            GROUP BY recipe_id
            ORDER BY avg_rating DESC
            LIMIT 3";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $ratings = [];
            foreach ($result as $row) {
                $ratings[] = [
                    'recipe_id' => (int)$row['recipe_id'],
                    'avg_rating' => (int)$row['avg_rating'] 
                ];
            }
            return $ratings;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des meilleurs scores : " . $e->getMessage();
            return [];
        }
    }
}
