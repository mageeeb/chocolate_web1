<?php

namespace model\mapping;

use model\AbstractMapping;

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
        $this->id = $id;
        return $this;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
