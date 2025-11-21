<?php

namespace model\mapping;

use model\AbstractMapping;

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
        $this->id = $id;
        return $this;
    }

    public function setPosition(?int $position): self
    {
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
        $this->recipe_id = $recipe_id;
        return $this;
    }

    public function setImagesId(?int $images_id): self
    {
        $this->images_id = $images_id;
        return $this;
    }
}
