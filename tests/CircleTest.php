<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Circle;

class CircleTest extends TestCase
{
    protected static $circle;

    protected function setUp(): void {
        self::$circle = new Circle();
    }

    public function testCalculatingSurface(): void
    {
        $this->assertInstanceOf(Circle::class, self::$circle);
    }

    public function testCalculatingDiameter(): void {
    }
}
