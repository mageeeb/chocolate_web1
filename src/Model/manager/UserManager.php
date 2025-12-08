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

    public function connect(UserMapping $user): bool
    {
        $sql = "SELECT * FROM `users` WHERE login = ?";
        $prepare = $this->db->prepare($sql);


        try {
            $prepare->execute([
                $user->getLogin(),

            ]);

            if ($prepare->rowCount() > 0) {
                $result = $prepare->fetch();
                if ($result && password_verify($user->getPassword(), $result['password'])) {
                    unset($result['password']);
                    $_SESSION = $result;
                    return true;
                }
            }


            $prepare->closeCursor();
            return false;
        } catch (Exception $e) {
            // L'erreur sera gérée par le contrôleur via $erreur
            return false;
        }
    }

    public function disconnect(): bool
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION = [];
            session_destroy();

            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params["path"],
                    $params["domain"],
                    $params["secure"],
                    $params["httponly"]
                );
            }
            return true;
        }
        return false;
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
            // L'erreur sera gérée par le contrôleur via $erreur
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
            // L'erreur sera gérée par le contrôleur via $erreur
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
            // L'erreur sera gérée par le contrôleur via $erreur
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
            $result = $prepare->fetch();
            $prepare->closeCursor();

            return $result ? new UserMapping($result) : null;
        } catch (Exception $e) {
            // L'erreur sera gérée par le contrôleur via $erreur
            return null;
        }
    }

    // Insertion d'un nouvel utilisateur
    public function insertUser(UserMapping $user): bool
    {
        $sql = "INSERT INTO `users` 
            (name, login, email, password, role, email_token, is_verified, images_id) 
            VALUES (:name, :login, :email, :password, :role, :email_token, :is_verified, :images_id)";
        $prepare = $this->db->prepare($sql);

        $emailToken = bin2hex(random_bytes(32));
        $user->setEmailToken($emailToken);

        $hashPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

        try {
            $prepare->execute([
                ':name'        => $user->getName(),
                ':login'       => $user->getLogin(),
                ':email'       => $user->getEmail(),
                ':password'    => $hashPassword,
                ':role'        => $user->getRole(),
                ':email_token' => $user->getEmailToken(),
                ':is_verified' => $user->getIsVerified(),
                ':images_id'   => $user->getImagesId(),
            ]);
            return true;
        } catch (Exception $e) {
            // L'erreur sera gérée par le contrôleur via $erreur
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
            // L'erreur sera gérée par le contrôleur via $erreur
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
            // L'erreur sera gérée par le contrôleur via $erreur
            return false;
        }
    }

    public function findByToken(string $token): ?UserMapping
    {
        $sql = "SELECT * FROM users WHERE email_token = :token LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':token', $token);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data ? new UserMapping($data) : null;
    }
    public function findByPasswordToken(string $token): ?UserMapping
    {
        $sql = "SELECT * FROM users WHERE pwd_token = :token LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':token', $token);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data ? new UserMapping($data) : null;
    }

    public function confirmEmail(UserMapping $user): bool
    {
        $sql = "UPDATE users 
            SET is_verified = 1, 
                email_token = NULL 
            WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $user->getId(), \PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function generatePasswordToken(UserMapping $user): bool
    {
        $sql = "UPDATE users SET pwd_token = ? WHERE id = ?";

        $prepare = $this->db->prepare($sql);

        $passwordToken = bin2hex(random_bytes(32));
        $user->setPwdToken($passwordToken);

        try {
            $prepare->execute([
                $user->getPwdToken(),
                $user->getId()
            ]);
            return true;
        } catch (Exception $e) {
            // L'erreur sera gérée par le contrôleur via $erreur
            return false;
        }
    }

    public function updatePassword(UserMapping $user): bool
    {
        $sql = "UPDATE users SET pwd_token = null, password = ? WHERE id = ?";

        $prepare = $this->db->prepare($sql);
        $hashPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

        try {
            $prepare->execute([
                $hashPassword,
                $user->getId()
            ]);
            return true;
        } catch (Exception $e) {
            // L'erreur sera gérée par le contrôleur via $erreur
            return false;
        }
    }
}
