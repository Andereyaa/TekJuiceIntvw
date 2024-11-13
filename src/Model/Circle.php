<?php

namespace App\Model;

class Circle implements IModel
{

    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateSurface(): float
    {
        $area = pi() * pow($this->radius, 2);
        return $area;
    }

    public function calculateDiameter(): float
    {
        $circumference = 2 * pi() * $this->radius;
        return $circumference;
    }
}
