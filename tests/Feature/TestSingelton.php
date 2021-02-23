<?php
namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Creational\Singelton\Logger;

class TestSingelton extends TestCase
{
    /**@test*/
    public function test_it_logs()
    {
        $l1=Logger::getInstance();
        $l1->log("hello");
        $handler=\fopen(__DIR__.'/../../Storage/logs.txt', 'r');
        $message=\fread($handler, fileSize(__DIR__.'/../../Storage/logs.txt'));
        $this->assertStringContainsString("hello", $message);
        \fclose($handler);
    }
    /**@test*/
    public function test_only_one_object_is_created()
    {
        $l1=Logger::getInstance();
        $l2=Logger::getInstance();
        $this->assertEquals($l1, $l2);
    }
}
