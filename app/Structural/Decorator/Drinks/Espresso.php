<?php
namespace App\Structural\Decorator\Drinks;

use App\Structural\Decorator\Beverage;

class Espresso implements Beverage
{
    private ?string $description;
    private float $cost;
    public function __construct()
    {
        $this->description="Espresso";
        $this->cost=30;
    }
    public function getDescription():?string
    {
        return $this->description;
    }
    public function setDescription(string $description=null):void
    {
        $this->description=$description;
    }
    public function getCost():?float
    {
        return $this->cost;
    }
    public function setCost(float $cost)
    {
        $this->cost=$cost;
    }
}