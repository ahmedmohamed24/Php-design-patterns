<?php
namespace App\Structural\Decorator;

use App\Structural\Decorator\Beverage;

interface CondimentDecorator extends Beverage
{
    public function setAmount(int $amount=1);
    public function getAmount():int;
}