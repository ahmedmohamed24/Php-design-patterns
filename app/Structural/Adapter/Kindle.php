<?php
namespace App\Structural\Adapter;

use App\Structural\Adapter\EReaderInterface;

class Kindle implements EReaderInterface
{
    public function turnOn():string
    {
        return "kindle open";
    }
    public function getNext():string
    {
        return "kindle next";
    }
}