<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\RecipeIngredientsMapping;
use PDO;
use Exception;

class RecipeIngredientsManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    // Récupération de tous les ingrédients
    public function getAllIngredients(): array
    {
        $sql = "SELECT * FROM `recipe_ingredients` ORDER BY `name` ASC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $ingredients = [];
            foreach ($result as $row) {
                $ingredient = new RecipeIngredientsMapping($row);
                $ingredients[] = $ingredient;
            }
            return $ingredients;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération des ingrédients : " . $e->getMessage();
            return [];
        }
    }

    // Récupération d'un ingrédient par ID
    public function getIngredientById(int $ingredientId): ?RecipeIngredientsMapping
    {
        $sql = "SELECT * FROM `recipe_ingredients` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$ingredientId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new RecipeIngredientsMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'ingrédient : " . $e->getMessage();
            return null;
        }
    }

    // Récupération d'un ingrédient par slug
    public function getIngredientBySlug(string $slug): ?RecipeIngredientsMapping
    {
        $sql = "SELECT * FROM `recipe_ingredients` WHERE `slug` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$slug]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new RecipeIngredientsMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'ingrédient : " . $e->getMessage();
            return null;
        }
    }

    // Récupération des ingrédients d'une recette
    public function getIngredientsByRecipeId(int $recipeId): array
    {
        $sql = "SELECT ri.* FROM `recipe_ingredients` ri
                INNER JOIN `recipe_ingredients_has_recipe` rhr ON ri.id = rhr.recipe_ingredients_id
                WHERE rhr.recipe_id = ?
                ORDER BY ri.name ASC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $ingredients = [];
            foreach ($result as $row) {
                $ingredient = new RecipeIngredientsMapping($row);
                $ingredients[] = $ingredient;
            }
            return $ingredients;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération des ingrédients : " . $e->getMessage();
            return [];
        }
    }

    // Insertion d'un nouvel ingrédient
    public function insertIngredient(RecipeIngredientsMapping $ingredient): bool
    {
        $sql = "INSERT INTO `recipe_ingredients` (slug, name) 
                VALUES (:slug, :name)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':slug', $ingredient->getSlug());
            $prepare->bindValue(':name', $ingredient->getName());
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion de l'ingrédient : " . $e->getMessage();
            return false;
        }
    }

    // Mise à jour d'un ingrédient
    public function updateIngredient(RecipeIngredientsMapping $ingredient): bool
    {
        $sql = "UPDATE `recipe_ingredients` SET `slug` = :slug, `name` = :name WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':id', $ingredient->getId(), PDO::PARAM_INT);
            $prepare->bindValue(':slug', $ingredient->getSlug());
            $prepare->bindValue(':name', $ingredient->getName());
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour de l'ingrédient : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'un ingrédient
    public function deleteIngredient(int $ingredientId): bool
    {
        $sql = "DELETE FROM `recipe_ingredients` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$ingredientId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de l'ingrédient : " . $e->getMessage();
            return false;
        }
    }

    // Ajout d'un ingrédient à une recette
    public function addIngredientToRecipe(int $recipeId, int $ingredientId): bool
    {
        $sql = "INSERT INTO `recipe_ingredients_has_recipe` (recipe_ingredients_id, recipe_id) 
                VALUES (:ingredient_id, :recipe_id)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':ingredient_id', $ingredientId, PDO::PARAM_INT);
            $prepare->bindValue(':recipe_id', $recipeId, PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'ajout de l'ingrédient à la recette : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'un ingrédient d'une recette
    public function removeIngredientFromRecipe(int $recipeId, int $ingredientId): bool
    {
        $sql = "DELETE FROM `recipe_ingredients_has_recipe` 
                WHERE `recipe_id` = ? AND `recipe_ingredients_id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$recipeId, $ingredientId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de l'ingrédient de la recette : " . $e->getMessage();
            return false;
        }
    }
}
