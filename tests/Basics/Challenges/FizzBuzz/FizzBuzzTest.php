<?php

namespace Tests\Basics\Challenges;

use PHPUnit\Framework\TestCase;

use function App\Basics\Challenges\FizzBuzz\fizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz1()
    {
        $expected = '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz';
        $this->expectOutputString($expected);
        fizzBuzz(11, 20);
    }

    public function testFizzBuzz2()
    {
        $expected = '';
        $this->expectOutputString($expected);
        fizzBuzz(7, 3);
    }

    public function testFizzBuzz3()
    {
        $expected = '1 2';
        $this->expectOutputString($expected);
        fizzBuzz(1, 2);
    }
}
