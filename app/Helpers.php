<?php
namespace App;

use App\Config;
use Dotenv\Dotenv;

if (!function_exists('config')) {
    function config(string $param)
    {
        $config=new Config();
        return $config->get($param);
    }
}

if (!\function_exists('env')) {
    function env($param)
    {
        Dotenv::createImmutable(__DIR__.'/../')->load();
        return $_ENV[$param]??null;
    }
}