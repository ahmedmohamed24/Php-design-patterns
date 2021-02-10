<?php
namespace App\Structural\Adapter;

use App\Structural\Adapter\BookInterface;

class HardCopy implements BookInterface
{
    public function open():string
    {
        return 'open';
    }
    public function turnPage():string
    {
        return 'turn';
    }
}