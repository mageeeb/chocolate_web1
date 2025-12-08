<?php

namespace model\manager;

use Exception;
use model\ManagerInterface;
use model\mapping\RecipeMapping;
use model\mapping\UserMapping;
use PDO;;

class RecipeManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    public function getAllRecipes(): array
    {
        $sql = "SELECT * FROM recipe";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $prepare->closeCursor();

            $recipes = [];
            foreach ($result as $row) {
                $recipe = new RecipeMapping($row);
                $recipes[] = $recipe;
            }
            return $recipes;
        } catch (Exception $e) {
            return [];
        }
    }

    public function getRecipeById(int $recipeId): ?RecipeMapping
    {
        $sql = "SELECT r.*, r.image_url, u.id, u.name, u.login FROM `recipe` r
                LEFT JOIN `users` u ON r.user_id = u.id
                WHERE r.id = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new RecipeMapping($result) : null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getRecipeByPrepTime(): array
    {
        $sql = "SELECT *
            FROM recipe
            ORDER BY prep_time ASC
            LIMIT 4";

        $prepare = $this->db->prepare($sql);

        try {
            $prepare->execute();
            $results = $prepare->fetchAll();
            $prepare->closeCursor();

            $comments = [];
            foreach ($results as $row) {
                $recipe  = new RecipeMapping($row);
                $comments[] = $recipe;
            }
            return $comments;
        } catch (Exception $e) {
            return [];
        }
    }
}
