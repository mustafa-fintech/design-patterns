<?php

namespace App\Classes;

use App\Classes\Logger;

class Slack extends Logger
{
    private $method;

    public function __construct()
    {
        $this->method = "Slack";
    }

    public function Log()
    {
        return $this->method;
    }
}
