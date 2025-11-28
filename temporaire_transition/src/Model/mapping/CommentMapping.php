<?php

namespace model\mapping;

use DateTimeImmutable;
use model\AbstractMapping;
use Exception;



class CommentMapping extends AbstractMapping
{

    protected ?int $id = null;
    protected ?string $content = null;
    protected ?DateTimeImmutable $created_at = null;
    protected ?int $is_accepted = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        if ($id !== null && $id < 0) {
            throw new Exception('ID must be positive');
        }
        $this->id = $id;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        if ($content !== null && strlen($content) > 600) {
            throw new Exception('Content cannot exceed 600 characters');
        }
        $this->content = $content;
        return $this;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(?DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getIsAccepted(): ?int
    {
        return $this->is_accepted;
    }

    public function setIsAccepted(?int $is_accepted): self
    {
        if ($is_accepted !== null && ($is_accepted < 0 || $is_accepted > 1)) {
            throw new Exception("La valeur ne peut qu'une valeur entre 0 et 1");
        }
        $this->is_accepted = $is_accepted;
        return $this;
    }

}
