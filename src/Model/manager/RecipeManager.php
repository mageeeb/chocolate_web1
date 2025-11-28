<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\RecipeMapping;
use model\mapping\UserMapping;
use PDO;
use Exception;

class RecipeManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    // Récupération de toutes les recettes
    public function getAllRecipes(): array
    {
        $sql = "SELECT r.*, u.id, u.name, u.login FROM `recipe` r
                INNER JOIN `users` u ON r.user_id = u.id
                ORDER BY r.created_at DESC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $recipes = [];
            foreach ($result as $row) {
                $recipe = new RecipeMapping($row);
                $recipes[] = $recipe;
            }
            return $recipes;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération des recettes : " . $e->getMessage();
            return [];
        }
    }

    // Récupération d'une recette par ID
    public function getRecipeById(int $recipeId): ?RecipeMapping
    {
        $sql = "SELECT r.*, u.id, u.name, u.login FROM `recipe` r
                INNER JOIN `users` u ON r.user_id = u.id
                WHERE r.id = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new RecipeMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de la recette : " . $e->getMessage();
            return null;
        }
    }

    // Récupération d'une recette par slug
    public function getRecipeBySlug(string $slug): ?RecipeMapping
    {
        $sql = "SELECT r.*, u.id, u.name, u.login FROM `recipe` r
                INNER JOIN `users` u ON r.user_id = u.id
                WHERE r.slug = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$slug]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new RecipeMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de la recette : " . $e->getMessage();
            return null;
        }
    }

    // Récupération des recettes d'un utilisateur
    public function getRecipesByUserId(int $userId): array
    {
        $sql = "SELECT r.*, u.id, u.name, u.login FROM `recipe` r
                INNER JOIN `users` u ON r.user_id = u.id
                WHERE r.user_id = ?
                ORDER BY r.created_at DESC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$userId]);
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $recipes = [];
            foreach ($result as $row) {
                $recipe = new RecipeMapping($row);
                $recipes[] = $recipe;
            }
            return $recipes;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération des recettes : " . $e->getMessage();
            return [];
        }
    }

    // Insertion d'une nouvelle recette
    public function insertRecipe(RecipeMapping $recipe): bool
    {
        $sql = "INSERT INTO `recipe` (title, slug, description, prep_time, user_id, images_id) 
                VALUES (:title, :slug, :description, :prep_time, :user_id, :images_id)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':title', $recipe->getTitle());
            $prepare->bindValue(':slug', $recipe->getSlug());
            $prepare->bindValue(':description', $recipe->getDescription());
            $prepare->bindValue(':prep_time', $recipe->getPrepTime());
            $prepare->bindValue(':user_id', $recipe->getUserId(), PDO::PARAM_INT);
            $prepare->bindValue(':images_id', $recipe->getImagesId(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion de la recette : " . $e->getMessage();
            return false;
        }
    }

    // Mise à jour d'une recette
    public function updateRecipe(RecipeMapping $recipe): bool
    {
        $sql = "UPDATE `recipe` SET `title` = :title, `slug` = :slug, `description` = :description, 
                `prep_time` = :prep_time, `images_id` = :images_id WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':id', $recipe->getId(), PDO::PARAM_INT);
            $prepare->bindValue(':title', $recipe->getTitle());
            $prepare->bindValue(':slug', $recipe->getSlug());
            $prepare->bindValue(':description', $recipe->getDescription());
            $prepare->bindValue(':prep_time', $recipe->getPrepTime());
            $prepare->bindValue(':images_id', $recipe->getImagesId(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour de la recette : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'une recette
    public function deleteRecipe(int $recipeId): bool
    {
        $sql = "DELETE FROM `recipe` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$recipeId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de la recette : " . $e->getMessage();
            return false;
        }
    }
}