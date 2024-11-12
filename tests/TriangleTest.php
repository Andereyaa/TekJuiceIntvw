<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Triangle;

class TriangleTest extends TestCase
{

    protected static $triangle;

    protected function setUp():void
    {
        self::$triangle = new Triangle(5, 4, 3);
    }

    public function testCalculatingSurface(): void
    {
        $this->assertInstanceOf(Triangle::class, self::$triangle);
        $this->assertEquals(round(self::$triangle->calculateSurface(), 3, PHP_ROUND_HALF_DOWN), 6.000);
    }

    public function testCalculatingDiameter(): void
    {
        $this->assertInstanceOf(Triangle::class, self::$triangle);
        $this->assertEquals(round(self::$triangle->calculateDiameter(), 3), 12);
    }
}
