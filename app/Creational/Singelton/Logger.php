<?php
namespace App\Creational\Singelton;

use App\Creational\Singelton\Singelton;

class Logger extends Singelton
{
    private $fileHandler;

    protected function __construct()
    {
        $this->fileHandler = fopen(__DIR__.'/../../../Storage/logs.txt', 'w');
    }

    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }

    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandler, "$date: $message \n");
    }
}
