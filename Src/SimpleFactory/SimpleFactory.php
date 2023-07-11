<?php

namespace App\SimpleFactory;

use Exception;

class SimpleFactory
{
    public static function createLogger($model)
    {
        if (class_exists($model)) {
			return new $model;
		}

        throw new Exception("{$model} does not exists");
    }
}
