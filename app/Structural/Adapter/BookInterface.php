<?php
namespace App\Structural\Adapter;

interface BookInterface
{
    public function open():string;
    public function turnPage():string;
}