<?php
namespace App\Structural\Adapter;

interface EReaderInterface
{
    public function turnOn():string;
    public function getNext():string;
}