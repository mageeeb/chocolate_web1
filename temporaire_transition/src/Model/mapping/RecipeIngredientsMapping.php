<?php

namespace model\mapping;

use model\AbstractMapping;
use Exception;

class RecipeIngredientsMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $slug = null;
    protected ?string $name = null;

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
            throw new Exception('ID must be positive');
        }
        $this->id = $id;
        return $this;
    }

    public function setSlug(?string $slug): self
    {
        if ($slug !== null && strlen($slug) > 104) {
            throw new Exception('Slug cannot exceed 104 characters');
        }
        $this->slug = $slug;
        return $this;
    }

    public function setName(?string $name): self
    {
        if ($name !== null && strlen($name) > 100) {
            throw new Exception('Name cannot exceed 100 characters');
        }
        $this->name = $name;
        return $this;
    }
}
