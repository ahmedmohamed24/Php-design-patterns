<?php
namespace App\Structural\Decorator\Condiments;

use App\Structural\Decorator\Beverage;

class Whip implements Beverage
{
    private ?string $description;
    private float $cost;
    private int $amount;
    public Beverage $beverage;
    public function __construct(Beverage $beverage)
    {
        $this->beverage=$beverage;
        $this->amount=1;
        $this->description="Whip";
        $this->cost=15.3;
        $this->setCost($this->cost);
    }
    public function getDescription():?string
    {
        return $this->description.=", ".$this->beverage->getDescription() ;
    }
    public function setDescription(string $description=null):void
    {
        $this->description=$description;
    }
    public function setAmount(int $amount=1)
    {
        $this->amount=$amount;
        $this->setCost($this->cost);
    }
    public function getAmount():int
    {
        return $this->amount;
    }
    public function getCost():float
    {
        return $this->cost;
    }
    public function setCost(float $cost)
    {
        $this->cost+=($this->beverage->getCost() * $this->amount);
    }
}