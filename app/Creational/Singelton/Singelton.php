<?php

namespace App\Creational\Singelton;

class Singelton
{
    private static array $instaces = [];

    protected function __construct()
    {
    }

    public function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception('Cannot unseralize singelton class');
    }

    public static function getInstance()
    {
        $subClass = static::class;
        if (!isset(self::$instaces[$subClass])) {
            self::$instaces[$subClass] = new static();
        }

        return self::$instaces[$subClass];
    }
}
