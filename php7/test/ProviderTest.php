<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    /**
     * PHPUnit example 2.5
     *
     * @dataProvider additionProvider
     */
    public function testFoo($a, $b, $expected): void
    {
        // $this->assertTrue(false);
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            'adding zeros'  => [
                0,
                0,
                0,
            ],
            'zero plus one' => [
                0,
                1,
                1,
            ],
            'one plus zero' => [
                1,
                0,
                1,
            ],
            'one plus one'  => [
                1,
                1,
                3,
            ],
        ];
    }
}
