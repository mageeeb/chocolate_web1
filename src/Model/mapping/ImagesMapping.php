<?php

namespace model\mapping;

use model\AbstractMapping;
use Exception;

class ImagesMapping extends AbstractMapping
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $description = null;

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
            throw new Exception('ID must be positive');
        }
        $this->id = $id;
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

    public function setDescription(?string $description): self
    {
        if ($description !== null && strlen($description) > 500) {
            throw new Exception('Description cannot exceed 500 characters');
        }
        $this->description = $description;
        return $this;
    }
}
