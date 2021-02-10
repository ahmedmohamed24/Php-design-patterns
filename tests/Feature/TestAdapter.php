<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Structural\Adapter\Kindle;
use App\Structural\Adapter\HardCopy;
use App\Structural\Adapter\EReaderAdapter;

class TestAdapter extends TestCase
{
    /**@test*/
    public function test_can_use_hard_copy_of_book()
    {
        $book=new HardCopy;
        $this->assertEquals('open', $book->open());
        $this->assertEquals('turn', $book->turnPage());
    }

    /**@test*/
    public function test_can_use_soft_copy_of_book()
    {
        $book= new EReaderAdapter(new Kindle);
        $this->assertEquals('kindle open', $book->open());
        $this->assertEquals('kindle next', $book->turnPage());
    }
}