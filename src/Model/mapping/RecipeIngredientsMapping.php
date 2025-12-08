<?php

namespace model\mapping;

use model\AbstractMapping;;

class RecipeIngredientsMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $slug = null;
    protected ?string $name = null;
    protected array $errors = [];

    // --- GETTERS ---
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getName(): ?string
    {
        return $this->name;
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

    public function setSlug(?string $slug): self
    {
        if ($slug !== null && strlen($slug) > 104) {
            $this->errors[] = "Le slug ne peut pas dépasser 104 caractères.";
        } else {
            $this->slug = $slug;
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
