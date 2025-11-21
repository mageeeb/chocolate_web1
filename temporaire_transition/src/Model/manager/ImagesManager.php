<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\ImagesMapping;
use PDO;
use Exception;

class ImagesManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    // Récupération de toutes les images
    public function getAllImages(): array
    {
        $sql = "SELECT * FROM `images` ORDER BY `id` DESC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $images = [];
            foreach ($result as $row) {
                $image = new ImagesMapping($row);
                $images[] = $image;
            }
            return $images;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération des images : " . $e->getMessage();
            return [];
        }
    }

    // Récupération d'une image par ID
    public function getImageById(int $imageId): ?ImagesMapping
    {
        $sql = "SELECT * FROM `images` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$imageId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new ImagesMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'image : " . $e->getMessage();
            return null;
        }
    }

    // Récupération d'une image par nom
    public function getImageByName(string $name): ?ImagesMapping
    {
        $sql = "SELECT * FROM `images` WHERE `name` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$name]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new ImagesMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'image : " . $e->getMessage();
            return null;
        }
    }

    // Insertion d'une nouvelle image
    public function insertImage(ImagesMapping $image): bool
    {
        $sql = "INSERT INTO `images` (name, description) 
                VALUES (:name, :description)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':name', $image->getName());
            $prepare->bindValue(':description', $image->getDescription());
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion de l'image : " . $e->getMessage();
            return false;
        }
    }

    // Mise à jour d'une image
    public function updateImage(ImagesMapping $image): bool
    {
        $sql = "UPDATE `images` SET `name` = :name, `description` = :description WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':id', $image->getId(), PDO::PARAM_INT);
            $prepare->bindValue(':name', $image->getName());
            $prepare->bindValue(':description', $image->getDescription());
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour de l'image : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'une image
    public function deleteImage(int $imageId): bool
    {
        $sql = "DELETE FROM `images` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$imageId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de l'image : " . $e->getMessage();
            return false;
        }
    }
}
