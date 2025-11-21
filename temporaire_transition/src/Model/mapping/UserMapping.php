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
        $this->id = $id;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;
        return $this;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(?string $password): self
    {
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
        $this->role = $role;
        return $this;
    }

    public function setEmailToken(?string $email_token): self
    {
        $this->email_token = $email_token;
        return $this;
    }

    public function setPwdToken(?string $pwd_token): self
    {
        $this->pwd_token = $pwd_token;
        return $this;
    }

    public function setIsVerified(?int $is_verified): self
    {
        $this->is_verified = $is_verified;
        return $this;
    }

    public function setImagesId(?int $images_id): self
    {
        $this->images_id = $images_id;
        return $this;
    }
}
