<?php

namespace model\mapping;

use DateTimeImmutable;
use model\AbstractMapping;
use Exception;

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
    protected ?int $is_verified = null;
    protected ?int $images_id = null;

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
            throw new Exception('ID must be positive');
        }
        $this->id = $id;
        return $this;
    }

    public function setName(?string $name): self
    {
        if ($name !== null && strlen($name) > 255) {
            throw new Exception('Name cannot exceed 255 characters');
        }
        $this->name = $name;
        return $this;
    }

    public function setLogin(?string $login): self
    {
        if ($login !== null && strlen($login) > 80) {
            throw new Exception('Login cannot exceed 80 characters');
        }
        $this->login = $login;
        return $this;
    }

    public function setEmail(?string $email): self
    {
        if ($email !== null) {
            if (strlen($email) > 255) {
                throw new Exception('Email cannot exceed 255 characters');
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email format');
            }
        }
        $this->email = $email;
        return $this;
    }

    public function setPassword(?string $password): self
    {
        if ($password !== null && strlen($password) > 255) {
            throw new Exception('Password cannot exceed 255 characters');
        }
        $this->password = $password;
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
            throw new Exception('Role must be between 0 and 255');
        }
        $this->role = $role;
        return $this;
    }

    public function setEmailToken(?string $email_token): self
    {
        if ($email_token !== null && strlen($email_token) > 255) {
            throw new Exception('Email token cannot exceed 255 characters');
        }
        $this->email_token = $email_token;
        return $this;
    }

    public function setPwdToken(?string $pwd_token): self
    {
        if ($pwd_token !== null && strlen($pwd_token) > 255) {
            throw new Exception('Password token cannot exceed 255 characters');
        }
        $this->pwd_token = $pwd_token;
        return $this;
    }

    public function setIsVerified(?int $is_verified): self
    {
        if ($is_verified !== null && ($is_verified < 0 || $is_verified > 1)) {
            throw new Exception('is_verified must be 0 or 1');
        }
        $this->is_verified = $is_verified;
        return $this;
    }


}
