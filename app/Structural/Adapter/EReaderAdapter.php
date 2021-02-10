<?php
namespace App\Structural\Adapter;

use App\Structural\Adapter\BookInterface;
use App\Structural\Adapter\EReaderInterface;

class EReaderAdapter implements BookInterface
{
    private EReaderInterface $eReader;

    public function __construct(EReaderInterface $eReader)
    {
        $this->eReader=$eReader;
    }

    public function open(): string
    {
        return $this->eReader->turnOn();
    }

    public function turnPage(): string
    {
        return $this->eReader->getNext();
    }
}