<?php

namespace App\Model;

use App\Model\BaseModel;

class Triangle implements BaseModel
{

    private float $a;
    private float $b;
    private float $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calculateSurface(): float
    {
        $semi_perimeter = $this->calculateDiameter($this->a, $this->b, $this->c) / 2;
        $area = sqrt($semi_perimeter * ($semi_perimeter - $this->a) * ($semi_perimeter - $this->b) * ($semi_perimeter - $this->c));
        return $area;
    }

    public function calculateDiameter(): float
    {
        $circumference = $this->a + $this->b + $this->c;
        return $circumference;
    }
}
