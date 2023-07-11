<?php

namespace App\Strategy;

use App\Classes\Logger;

class Context
{
    public function __construct(private Logger $logger)
    {
    }

    public function execute()
    {
        return $this->logger->Log();
    }
}
