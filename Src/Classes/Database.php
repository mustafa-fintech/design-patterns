<?php

namespace App\Classes;

use App\Classes\Logger;

class DataBase extends Logger
{
    private $method;

    public function __construct()
    {
        $this->method = "Database";
    }

    public function Log()
    {
        return $this->method;
    }
}
