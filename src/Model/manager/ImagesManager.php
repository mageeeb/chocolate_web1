<?php

namespace model\manager;

use model\ManagerInterface;
use model\mapping\ImagesMapping;
use PDO;;

class ImagesManager implements ManagerInterface
{
    private PDO $db;

    public function __construct(PDO $connect)
    {
        $this->db = $connect;
    }
}
