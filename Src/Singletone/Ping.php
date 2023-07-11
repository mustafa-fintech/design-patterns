<?php

namespace App\Singletone;


class Ping
{
    public static $object;

    public function __construct()
    {
        // system('ping 127.0.0.1');
    }

    public static function connect()
    {
        if (!isset(self::$object)) {
            self::$object = new Ping;
        }
        return self::$object;
    }
}
