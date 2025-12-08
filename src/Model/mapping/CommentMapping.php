<?php

namespace model\mapping;

use model\AbstractMapping;

class CommentMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $content = null;
    protected ?string $created_at = null;
    protected ?int $is_accepted = 0;
    protected ?int $recipe_id = null;
    protected ?int $user_id = null;
    protected ?int $rating = null;
    protected array $errors = [];

    public function setId(?int $id): void
    {
        if ($id !== null && $id < 0) {
            $this->errors[] = "L'ID doit être positif.";
        } else {
            $this->id = $id;
        }
    }

    public function setContent(?string $content): void
    {
        if ($content !== null) {
            $content = trim($content);
            if (strlen($content) < 1) {
                $this->errors[] = "Le contenu du commentaire ne peut pas être vide.";
            } elseif (strlen($content) > 600) {
                $this->errors[] = "Le contenu du commentaire est trop long (max 600 caractères).";
            } else {
                $this->content = $content;
            }
        } else {
            $this->errors[] = "Le contenu du commentaire est obligatoire.";
        }
    }

    public function setCreatedAt(?string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function setIsAccepted(?int $is_accepted): void
    {
        if ($is_accepted !== null && ($is_accepted < 0 || $is_accepted > 1)) {
            $this->errors[] = "La valeur is_accepted doit être 0 ou 1.";
        } else {
            $this->is_accepted = $is_accepted ?? 0;
        }
    }

    public function setRecipeId(?int $recipe_id): void
    {
        if ($recipe_id !== null && $recipe_id < 0) {
            $this->errors[] = "L'ID de la recette doit être positif.";
        } else {
            $this->recipe_id = $recipe_id;
        }
    }

    public function setUserId(?int $user_id): void
    {
        if ($user_id !== null && $user_id < 0) {
            $this->errors[] = "L'ID de l'utilisateur doit être positif.";
        } else {
            $this->user_id = $user_id;
        }
    }

    public function setRating(?int $rating): void
    {
        if ($rating !== null && ($rating < 1 || $rating > 5)) {
            $this->errors[] = "La note doit être entre 1 et 5.";
        } else {
            $this->rating = $rating;
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function isValid(): bool
    {
        return empty($this->errors);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    public function getIsAccepted(): ?int
    {
        return $this->is_accepted;
    }

    public function getRecipeId(): ?int
    {
        return $this->recipe_id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }
}

