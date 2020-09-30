<?php

namespace Tests\Basics\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Basics\Challenges\AddDigits\addDigits;

class AddDigitsTest extends TestCase
{
    public function testAddDigits()
    {
        $this->assertEquals(0, addDigits(0));
        $this->assertEquals(3, addDigits(3));
        $this->assertEquals(1, addDigits(10));
        $this->assertEquals(2, addDigits(29));
    }
}
