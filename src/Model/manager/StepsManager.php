<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\StepsMapping;
use PDO;;

class StepsManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    // Récupération de toutes les étapes
    public function getAllSteps(): array
    {
        $sql = "SELECT * FROM `steps` ORDER BY `position` ASC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $steps = [];
            foreach ($result as $row) {
                $step = new StepsMapping($row);
                $steps[] = $step;
            }
            return $steps;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des étapes : " . $e->getMessage();
            return [];
        }
    }

    // Récupération d'une étape par ID
    public function getStepById(int $stepId): ?StepsMapping
    {
        $sql = "SELECT * FROM `steps` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$stepId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new StepsMapping($result) : null;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'étape : " . $e->getMessage();
            return null;
        }
    }

    // Récupération des étapes d'une recette
    public function getStepsByRecipeId(int $recipeId): array
    {
        $sql = "SELECT * FROM `steps` WHERE `recipe_id` = ? ORDER BY `position` ASC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$recipeId]);
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $steps = [];
            foreach ($result as $row) {
                $step = new StepsMapping($row);
                $steps[] = $step;
            }
            return $steps;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des étapes : " . $e->getMessage();
            return [];
        }
    }

    // Insertion d'une nouvelle étape
    public function insertStep(StepsMapping $step): bool
    {
        $sql = "INSERT INTO `steps` (position, instruction, recipe_id, images_id) 
                VALUES (:position, :instruction, :recipe_id, :images_id)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':position', $step->getPosition(), PDO::PARAM_INT);
            $prepare->bindValue(':instruction', $step->getInstruction());
            $prepare->bindValue(':recipe_id', $step->getRecipeId(), PDO::PARAM_INT);
            $prepare->bindValue(':images_id', $step->getImagesId(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion de l'étape : " . $e->getMessage();
            return false;
        }
    }

    // Mise à jour d'une étape
    public function updateStep(StepsMapping $step): bool
    {
        $sql = "UPDATE `steps` SET `position` = :position, `instruction` = :instruction, 
                `images_id` = :images_id WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':id', $step->getId(), PDO::PARAM_INT);
            $prepare->bindValue(':position', $step->getPosition(), PDO::PARAM_INT);
            $prepare->bindValue(':instruction', $step->getInstruction());
            $prepare->bindValue(':images_id', $step->getImagesId(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour de l'étape : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'une étape
    public function deleteStep(int $stepId): bool
    {
        $sql = "DELETE FROM `steps` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$stepId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de l'étape : " . $e->getMessage();
            return false;
        }
    }
}
