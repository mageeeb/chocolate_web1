<?php

namespace model\mapping;

use model\AbstractMapping;;

class ContactMapping extends AbstractMapping
{
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?string $message = null;
    protected array $errors = [];
    public function setName(?string $name): void
    {
        if ($name !== null) {
            $name = trim($name);
            if (strlen($name) < 2) {
                $this->errors[] = "Le nom doit contenir au moins 2 caractères.";
            } elseif (strlen($name) > 100) {
                $this->errors[] = "Le nom est trop long (max 100 caractères).";
            } else {
                $this->name = $name;
            }
        } else {
            $this->errors[] = "Le nom est obligatoire.";
        }
    }

    public function setEmail(?string $email): void
    {
        if ($email !== null) {
            $email = trim($email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->errors[] = "Adresse email invalide.";
            } else {
                $this->email = $email;
            }
        } else {
            $this->errors[] = "L'email est obligatoire.";
        }
    }

    public function setMessage(?string $message): void
    {
        if ($message !== null) {
            $message = trim($message);
            if (strlen($message) < 5) {
                $this->errors[] = "Le message doit contenir au moins 5 caractères.";
            } elseif (strlen($message) > 1000) {
                $this->errors[] = "Le message est trop long (max 1000 caractères).";
            } else {
                $this->message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
            }
        } else {
            $this->errors[] = "Le message est obligatoire.";
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function isValid(): bool
    {
        return empty($this->errors);
    }

    // Getters classiques...
    public function getName(): ?string
    {
        return $this->name;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function getMessage(): ?string
    {
        return $this->message;
    }
}
