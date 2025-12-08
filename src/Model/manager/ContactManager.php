<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\ContactMapping;
use PDO;
use Exception;

class ContactManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }

    public function insertComment(ContactMapping $comment): bool|string
    {
        $sql = "INSERT INTO contact (name, email, message, created_at) 
                    VALUES (:name, :email, :message, NOW())";

        $prepare = $this->db->prepare($sql);

        

        try {
            $prepare->execute([
                ':name'    => $comment->getName(),
                ':email'   => $comment->getEmail(),
                ':message' => $comment->getMessage()
            ]);
            return true;
        } catch (Exception $e) {
            return "<p>Erreur lors de l'insertion du commentaire. Veuillez réessayer.</p>";
        }
    }
}
