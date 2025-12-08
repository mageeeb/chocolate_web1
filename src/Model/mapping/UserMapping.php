<?php

namespace model\mapping;

use model\AbstractMapping;

class UserMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $login = null;
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?string $registered_at = null;
    protected ?int $role = null;
    protected ?string $email_token = null;
    protected ?string $pwd_token = null;
    protected ?int $is_verified = 0;
    protected ?int $images_id = null;
    protected array $errors = [];

    // --- GETTERS ---
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRegisteredAt(): ?string
    {
        return $this->registered_at;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function getEmailToken(): ?string
    {
        return $this->email_token;
    }

    public function getPwdToken(): ?string
    {
        return $this->pwd_token;
    }

    public function getIsVerified(): ?int
    {
        return $this->is_verified;
    }

    public function getImagesId(): ?int
    {
        return $this->images_id;
    }

    // --- SETTERS ---
    public function setId(?int $id): self
    {
        if ($id !== null && $id < 0) {
            $this->errors[] = "L'ID doit être positif.";
        } else {
            $this->id = $id;
        }
        return $this;
    }

    public function setName(?string $name): self
    {
        if ($name !== null && strlen($name) > 255) {
            $this->errors[] = "Le nom ne peut pas dépasser 255 caractères.";
        } else {
            $this->name = $name;
        }
        return $this;
    }

    public function setLogin(?string $login): self
    {
        if ($login !== null && strlen($login) > 80) {
            $this->errors[] = "Le login ne peut pas dépasser 80 caractères.";
        } else {
            $this->login = $login;
        }
        return $this;
    }

    public function setEmail(?string $email): self
    {
        if ($email !== null) {
            if (strlen($email) > 255) {
                $this->errors[] = "L'email ne peut pas dépasser 255 caractères.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->errors[] = "Format d'email invalide.";
            } else {
                $this->email = $email;
            }
        } else {
            $this->email = $email;
        }
        return $this;
    }

    public function setPassword(?string $password): self
    {
        if ($password === null || $password === '') {
            return $this;
        }

        $password = trim($password);

        // Si c'est déjà un hash, on l'accepte
        if (strpos($password, '$2y$') === 0) {
            $this->password = $password;
            return $this;
        }

        if (strlen($password) < 8) {
            $this->errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
        } else {
            $this->password = $password;
        }
        return $this;
    }

    public function setRegisteredAt(?string $registered_at): self
    {
        $this->registered_at = $registered_at;
        return $this;
    }

    public function setRole(?int $role): self
    {
        if ($role !== null && ($role < 0 || $role > 255)) {
            $this->errors[] = "Le rôle doit être entre 0 et 255.";
        } else {
            $this->role = $role;
        }
        return $this;
    }

    public function setEmailToken(?string $email_token): self
    {
        if ($email_token !== null && strlen($email_token) > 255) {
            $this->errors[] = "Le token d'email ne peut pas dépasser 255 caractères.";
        } else {
            $this->email_token = $email_token;
        }
        return $this;
    }

    public function setPwdToken(?string $pwd_token): self
    {
        if ($pwd_token !== null && strlen($pwd_token) > 255) {
            $this->errors[] = "Le token de mot de passe ne peut pas dépasser 255 caractères.";
        } else {
            $this->pwd_token = $pwd_token;
        }
        return $this;
    }

    public function setIsVerified(?int $is_verified): self
    {
        if ($is_verified !== null && ($is_verified < 0 || $is_verified > 1)) {
            $this->errors[] = "La valeur is_verified doit être 0 ou 1.";
        } else {
            $this->is_verified = $is_verified;
        }
        return $this;
    }

    public function setImagesId(?int $images_id): self
    {
        if ($images_id !== null && $images_id < 0) {
            $this->errors[] = "L'ID d'image doit être positif.";
        } else {
            $this->images_id = $images_id;
        }
        return $this;
    }

    // --- MÉTHODES DE VALIDATION ---
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function isValid(): bool
    {
        return empty($this->errors);
    }
}
