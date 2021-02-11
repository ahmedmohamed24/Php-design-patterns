<?php
namespace Tests\Unit;

use App\Config;
use PHPUnit\Framework\TestCase;

class TestConfigFile extends TestCase
{
    /**@test*/
    public function test_it_reads_config_file()
    {
        $config=new Config;
        $this->assertArrayHasKey('db', $config->data());
    }
    /**@test*/
    public function test_it_reads_from_input_json()
    {
        $config=new Config('{"db":{"test":"mysql"}}');
        $this->assertEquals("mysql", $config->get('db.test'));
    }
    /**@test*/
    public function test_it_reads_a_specific_attribute_from_default_config_file()
    {
        $config=new Config();

        $this->assertEquals('user', $config->get('db.mysql.uname'));

        $config2=new Config('{"mail":"smtp"}');
        $this->assertEquals('smtp', $config2->get('mail'));
    }
}