<?php

namespace model\mapping;

use model\AbstractMapping;
use Exception;

class StepsMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?int $position = null;
    protected ?string $instruction = null;
    protected ?int $recipe_id = null;
    protected ?int $images_id = null;

    // --- GETTERS ---
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function getInstruction(): ?string
    {
        return $this->instruction;
    }

    public function getRecipeId(): ?int
    {
        return $this->recipe_id;
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

    public function setPosition(?int $position): self
    {
        if ($position !== null && $position < 0) {
            throw new Exception('Position must be positive');
        }
        $this->position = $position;
        return $this;
    }

    public function setInstruction(?string $instruction): self
    {
        $this->instruction = $instruction;
        return $this;
    }

    public function setRecipeId(?int $recipe_id): self
    {
        if ($recipe_id !== null && $recipe_id < 0) {
            throw new Exception('Recipe ID must be positive');
        }
        $this->recipe_id = $recipe_id;
        return $this;
    }

    public function setImagesId(?int $images_id): self
    {
        if ($images_id !== null && $images_id < 0) {
            throw new Exception('Images ID must be positive');
        }
        $this->images_id = $images_id;
        return $this;
    }
}
