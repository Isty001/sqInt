<?php

namespace Excercises\Squint\Tests;

use Excercises\Squint\Integers;

class SquintTest extends \PHPUnit_Framework_TestCase
{
    public function testSquint()
    {
        $integersClass = new Integers();

        $expectedSquares = [1, 4, 9, 16, 25];
        $this->assertSame($expectedSquares, $integersClass->take(5, $integersClass->squaresOf($integersClass->integers(PHP_INT_MAX))));
    }
}
