<?php

namespace CiTest;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testAdd(): void
    {
        $sum = new Sum();
        $result = $sum->add(2, 2);
        $this->assertSame(4, $result);
    }
}
