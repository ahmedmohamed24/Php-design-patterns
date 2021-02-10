<?php
namespace App\Structural\Decorator;

interface Beverage
{
    public function getDescription():?string;
    public function setDescription(string $description=null):void;
    public function getCost():?float;
    public function setCost(float $cost);
}