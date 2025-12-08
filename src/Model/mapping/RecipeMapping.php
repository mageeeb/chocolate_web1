<?php

namespace model\mapping;

use model\AbstractMapping;;

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
    protected ?string $image_url = null;
    protected array $errors = [];

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

    public function getImageUrl(): ?string
    {
        return $this->image_url;
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

    public function setTitle(?string $title): self
    {
        if ($title !== null && strlen($title) > 255) {
            $this->errors[] = "Le titre ne peut pas dépasser 255 caractères.";
        } else {
            $this->title = $title;
        }
        return $this;
    }

    public function setSlug(?string $slug): self
    {
        if ($slug !== null && strlen($slug) > 130) {
            $this->errors[] = "Le slug ne peut pas dépasser 130 caractères.";
        } else {
            $this->slug = $slug;
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

    public function setPrepTime(?string $prep_time): self
    {
        if ($prep_time !== null && strlen($prep_time) > 150) {
            $this->errors[] = "Le temps de préparation ne peut pas dépasser 150 caractères.";
        } else {
            $this->prep_time = $prep_time;
        }
        return $this;
    }

    public function setCreatedAt(?string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setUserId(?int $user_id): self
    {
        if ($user_id !== null && $user_id < 0) {
            $this->errors[] = "L'ID utilisateur doit être positif.";
        } else {
            $this->user_id = $user_id;
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

    public function setImageUrl(?string $image_url): self
    {
        $this->image_url = $image_url;
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
