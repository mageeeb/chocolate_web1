<?php

namespace model\manager;

use Exception;
use model\ManagerInterface;
use model\mapping\CommentMapping;
use model\mapping\UserMapping;
use model\mapping\RecipeMapping;
use PDO;;

class CommentManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    public function insertComment(CommentMapping $comment): bool|string
    {
        if (!isset($_SESSION['is_verified']) || $_SESSION['is_verified'] !== 1) {
            return "<p>Vous devez être connecté pour poster un commentaire</p>";
        }

        if (!$comment->isValid()) {
            $errors = $comment->getErrors();
            return "<p>" . implode("</p><p>", $errors) . "</p>";
        }

        $sql = "INSERT INTO comments (content, recipe_id, user_id, rating, created_at) 
                VALUES (:content, :recipe_id, :user_id, :rating, NOW())";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute([
                ':content' => $comment->getContent(),
                ':recipe_id' => $comment->getRecipeId(),
                ':user_id' => $_SESSION['id'],
                ':rating' => $comment->getRating()
            ]);
            return true;
        } catch (Exception $e) {
            return "<p>Erreur lors de l'insertion du commentaire. Veuillez réessayer.</p>";
        }
    }

    public function getAllCommentsByRecipeId(int $recipeId): array
    {
        $sql = "SELECT c.*, u.id as user_id, u.name as user_name 
                FROM comments c 
                INNER JOIN users u ON c.user_id = u.id 
                WHERE c.recipe_id = ? 
                ORDER BY c.created_at DESC";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute([$recipeId]);
            $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $comments = [];
            foreach ($results as $row) {
                $comment = new CommentMapping($row);
                $user = new UserMapping(['id' => $row['user_id'], 'name' => $row['user_name']]);
                $comments[] = ['comment' => $comment, 'user' => $user];
            }
            return $comments;
        } catch (Exception $e) {
            return [];
        }
    }

    public function getRatingByRecipe(int $recipeId): ?float
    {
        $sql = "SELECT AVG(rating) as avg_rating 
                FROM comments 
                WHERE recipe_id = ? AND rating IS NOT NULL";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result && $result['avg_rating'] ? (float)$result['avg_rating'] : null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getTop3Ratings(): array
    {
        $sql = "SELECT c.*, u.name AS user_name, r.title AS recipe_title
            FROM comments c
            INNER JOIN users u ON c.user_id = u.id
            INNER JOIN recipe r ON c.recipe_id = r.id
            WHERE c.rating IS NOT NULL
            ORDER BY c.rating DESC, c.created_at DESC
            LIMIT 4";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute();
            $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $comments = [];
            foreach ($results as $row) {
                $comment = new CommentMapping($row);
                $user    = new UserMapping(['id' => $row['user_id'], 'name' => $row['user_name']]);
                $recipe  = new RecipeMapping(['id' => $row['recipe_id'], 'title' => $row['recipe_title']]);
                $comments[] = ['comment' => $comment, 'user' => $user, 'recipe' => $recipe];
            }
            return $comments;
        } catch (Exception $e) {
            return [];
        }
    }


    /**
     * Récupère les 3 recettes avec les meilleures notes moyennes
     * Retourne un tableau de recettes avec leurs informations et leur note moyenne
     */
    public function getTop3RatedRecipes(): array
    {
        $sql = "SELECT r.id, r.title, r.slug, r.image_url, r.description, r.prep_time, r.created_at,
                       COALESCE(AVG(c.rating), 0) as avg_rating,
                       COUNT(c.id) as comment_count
                FROM recipe r
                LEFT JOIN comments c ON r.id = c.recipe_id AND c.rating IS NOT NULL
                GROUP BY r.id, r.title, r.slug, r.image_url, r.description, r.prep_time, r.created_at
                HAVING avg_rating > 0
                ORDER BY avg_rating DESC, comment_count DESC
                LIMIT 4";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute();
            $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $results;
        } catch (Exception $e) {
            return [];
        }
    }

    public function getBestRateComment(): array
    {
        $sql = "SELECT c.*, u.id as user_id, u.name as user_name, r.id as recipe_id, r.title as recipe_title 
                FROM comments c 
                INNER JOIN users u ON c.user_id = u.id 
                INNER JOIN recipe r ON c.recipe_id = r.id 
                WHERE c.rating IS NOT NULL 
                ORDER BY c.rating DESC, c.created_at DESC 
                LIMIT 9";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute();
            $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $comments = [];
            foreach ($results as $row) {
                $comment = new CommentMapping($row);
                $user = new UserMapping(['id' => $row['user_id'], 'name' => $row['user_name']]);
                $recipe = new RecipeMapping(['id' => $row['recipe_id'], 'title' => $row['recipe_title']]);
                $comments[] = ['comment' => $comment, 'user' => $user, 'recipe' => $recipe];
            }
            return $comments;
        } catch (Exception $e) {
            return [];
        }
    }

    public function getCommentsWithUsersAndRecipes(int $limit = 10): array
    {
        $sql = "SELECT c.*, u.id as user_id, u.name as user_name, r.id as recipe_id, r.title as recipe_title 
                FROM comments c 
                INNER JOIN users u ON c.user_id = u.id 
                INNER JOIN recipe r ON c.recipe_id = r.id 
                ORDER BY c.created_at DESC 
                LIMIT ?";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute([$limit]);
            $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $comments = [];
            foreach ($results as $row) {
                $comment = new CommentMapping($row);
                $user = new UserMapping(['id' => $row['user_id'], 'name' => $row['user_name']]);
                $recipe = new RecipeMapping(['id' => $row['recipe_id'], 'title' => $row['recipe_title']]);
                $comments[] = ['comment' => $comment, 'user' => $user, 'recipe' => $recipe];
            }
            return $comments;
        } catch (Exception $e) {
            return [];
        }
    }
}
