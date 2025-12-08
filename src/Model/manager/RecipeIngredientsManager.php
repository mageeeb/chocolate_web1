<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\RecipeIngredientsMapping;
use PDO;;

class RecipeIngredientsManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }
}
