<?php

namespace App\Service;

use App\Model\IModel;

class GeometryService {

    public function getSumOfAreas(IModel $a, IModel $b): float {
        $sumOfAreas = $a->calculateSurface() + $b->calculateSurface();
        return $sumOfAreas;
    }

    public function getSumOfDiameters(IModel $a, IModel $b): float {
        $sumOfDiameters = $a->calculateDiameter() + $b->calculateDiameter();
        return $sumOfDiameters;
    }
}