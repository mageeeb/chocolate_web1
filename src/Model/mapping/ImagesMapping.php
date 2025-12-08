<?php

namespace model\mapping;

use model\AbstractMapping;;

class ImagesMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $description = null;
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

    public function getDescription(): ?string
    {
        return $this->description;
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
        if ($name !== null && strlen($name) > 100) {
            $this->errors[] = "Le nom ne peut pas dépasser 100 caractères.";
        } else {
            $this->name = $name;
        }
        return $this;
    }

    public function setDescription(?string $description): self
    {
        if ($description !== null && strlen($description) > 500) {
            $this->errors[] = "La description ne peut pas dépasser 500 caractères.";
        } else {
            $this->description = $description;
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
