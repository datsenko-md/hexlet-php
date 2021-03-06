<?php

namespace Tests\Functions\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Functions\Lessons\Without\without;

class WithoutTest extends TestCase
{
    public function testWithout()
    {
        $this->assertEquals([3, 10, 'true'], without([3, 4, 10, 4, 'true'], 4));
        $this->assertEquals(['3', 2], without(['3', 2], 0, 5, 11));
        $this->assertEquals([3, 'true'], without([3, 4, 10, 4, 'true'], 4, 10));
    }
}
