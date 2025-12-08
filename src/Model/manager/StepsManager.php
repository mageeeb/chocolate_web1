<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\StepsMapping;
use PDO;;

class StepsManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }
}
