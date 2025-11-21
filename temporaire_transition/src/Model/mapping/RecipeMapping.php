<?php

namespace model\mapping;

use model\AbstractMapping;
use Exception;

class RecipeMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $title = null;
    protected ?string $slug = null;
    protected ?string $description = null;
    protected ?string $prep_time = null;
    protected ?string $created_at = null;
    protected ?int $user_id = null;
    protected ?int $images_id = null;

    // --- GETTERS ---
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPrepTime(): ?string
    {
        return $this->prep_time;
    }

    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
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

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setPrepTime(?string $prep_time): self
    {
        $this->prep_time = $prep_time;
        return $this;
    }

    public function setCreatedAt(?string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setUserId(?int $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function setImagesId(?int $images_id): self
    {
        $this->images_id = $images_id;
        return $this;
    }
}