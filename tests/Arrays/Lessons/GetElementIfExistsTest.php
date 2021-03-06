<?php

namespace Tests\Arrays\Lessons;

use PHPUnit\Framework\TestCase;

use function App\Arrays\Lessons\GetElementIfExists\getElementIfExists;

class GetElementIfExistsTest extends TestCase
{
    public function testGetElementIfExists()
    {
        $names = ["Anna", "Bob", "Carl", "David", null];
        
        $result1 = getElementIfExists($names, 1);
        $this->assertEquals("Bob", $result1);
        
        $result2 = getElementIfExists($names, 7);
        $this->assertEquals(null, $result2);
        
        $result3 = getElementIfExists($names, 10, "Maria");
        $this->assertEquals("Maria", $result3);
        
        $result4 = getElementIfExists($names, 4, "Maria");
        $this->assertEquals(null, $result4);
    }
}
