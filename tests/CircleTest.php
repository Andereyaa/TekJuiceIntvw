<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Circle;

class CircleTest extends TestCase
{
    protected static $circle;

    protected function setUp(): void
    {
        self::$circle = new Circle(2);
    }

    public function testCalculatingSurface(): void
    {
        $this->assertInstanceOf(Circle::class, self::$circle);
        $this->assertEquals(round(self::$circle->calculateSurface(), 3, PHP_ROUND_HALF_DOWN), 12.566);
    }

    public function testCalculatingDiameter(): void
    {
        $this->assertInstanceOf(Circle::class, self::$circle);
        $this->assertEquals(round(self::$circle->calculateDiameter(), 3, PHP_ROUND_HALF_DOWN), 12.566);
    }
}
