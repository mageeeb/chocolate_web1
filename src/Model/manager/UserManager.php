<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\UserMapping;
use PDO;
use Exception;

class UserManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    // Récupération de tous les utilisateurs
    public function getAllUsers(): array
    {
        $sql = "SELECT * FROM `users` ORDER BY `registered_at` DESC";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            $users = [];
            foreach ($result as $row) {
                $user = new UserMapping($row);
                $users[] = $user;
            }
            return $users;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération des utilisateurs : " . $e->getMessage();
            return [];
        }
    }

    // Récupération d'un utilisateur par ID
    public function getUserById(int $userId): ?UserMapping
    {
        $sql = "SELECT * FROM `users` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$userId]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new UserMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }

    // Récupération d'un utilisateur par login
    public function getUserByLogin(string $login): ?UserMapping
    {
        $sql = "SELECT * FROM `users` WHERE `login` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$login]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new UserMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }

    // Récupération d'un utilisateur par email
    public function getUserByEmail(string $email): ?UserMapping
    {
        $sql = "SELECT * FROM `users` WHERE `email` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$email]);
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            $prepare->closeCursor();

            return $result ? new UserMapping($result) : null;

        } catch (Exception $e) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }

    // Insertion d'un nouvel utilisateur
    public function insertUser(UserMapping $user): bool
    {
        $sql = "INSERT INTO `users` (name, login, email, password, role, is_verified, images_id) 
                VALUES (:name, :login, :email, :password, :role, :is_verified, :images_id)";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':name', $user->getName());
            $prepare->bindValue(':login', $user->getLogin());
            $prepare->bindValue(':email', $user->getEmail());
            $prepare->bindValue(':password', $user->getPassword());
            $prepare->bindValue(':role', $user->getRole(), PDO::PARAM_INT);
            $prepare->bindValue(':is_verified', $user->getIsVerified(), PDO::PARAM_INT);
            $prepare->bindValue(':images_id', $user->getImagesId(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    // Mise à jour d'un utilisateur
    public function updateUser(UserMapping $user): bool
    {
        $sql = "UPDATE `users` SET `name` = :name, `login` = :login, `email` = :email, 
                `password` = :password, `role` = :role, `is_verified` = :is_verified, 
                `images_id` = :images_id WHERE `id` = :id";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->bindValue(':id', $user->getId(), PDO::PARAM_INT);
            $prepare->bindValue(':name', $user->getName());
            $prepare->bindValue(':login', $user->getLogin());
            $prepare->bindValue(':email', $user->getEmail());
            $prepare->bindValue(':password', $user->getPassword());
            $prepare->bindValue(':role', $user->getRole(), PDO::PARAM_INT);
            $prepare->bindValue(':is_verified', $user->getIsVerified(), PDO::PARAM_INT);
            $prepare->bindValue(':images_id', $user->getImagesId(), PDO::PARAM_INT);
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    // Suppression d'un utilisateur
    public function deleteUser(int $userId): bool
    {
        $sql = "DELETE FROM `users` WHERE `id` = ?";
        $prepare = $this->db->prepare($sql);
        try {
            $prepare->execute([$userId]);
            return true;
        } catch (Exception $e) {
            echo "Erreur lors de la suppression de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }
}
