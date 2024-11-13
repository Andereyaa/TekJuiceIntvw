<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Triangle;
use App\Model\Circle;
use App\Service\GeometryService;

class GeometryServiceTest extends TestCase
{
    protected static $geometryService;
    protected static $triangle;
    protected static $circle;

    protected function setUp(): void
    {
        self::$triangle = new Triangle(5, 4, 3);
        self::$circle = new Circle(2);
        self::$geometryService = new GeometryService();
    }

    public function testCalculatingSumOfSurfaces(): void
    {
        $this->assertEquals(round(self::$geometryService->getSumOfAreas(self::$triangle, self::$circle), 3, PHP_ROUND_HALF_DOWN), 18.566);
    }

    public function testCalculatingSumOfDiameters(): void
    {
        $this->assertEquals(round(self::$geometryService->getSumOfDiameters(self::$triangle, self::$circle), 3, PHP_ROUND_HALF_DOWN), 24.566);
    }
}
