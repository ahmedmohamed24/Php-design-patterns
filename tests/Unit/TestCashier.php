<?php
namespace Tests\Unit;

use App\Structural\Decorator\Beverage;
use App\Structural\Decorator\Condiments\Soy;
use App\Structural\Decorator\Condiments\Mocha;
use App\Structural\Decorator\Drinks\HouseBlend;
use PHPUnit\Framework\TestCase;

class TestCashier extends TestCase
{
    /**@test*/
    public function test_cashier_can_make_order()
    {
        $order=new Mocha(new Soy(new HouseBlend()));
        $this->assertInstanceOf(Beverage::class, $order);
        $this->assertEquals(123.12, $order->getCost());
        $this->assertEquals('Mocha, Soy, House Blend', $order->getDescription());
    }
}