<?php

namespace App\Classes;

use App\Classes\Logger;

class File extends Logger
{
    private $method;

    public function __construct()
    {
        $this->method = "File";
    }

    public function Log()
    {
        return $this->method;
    }
}
