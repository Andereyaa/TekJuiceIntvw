<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

use App\Model\Circle;
use App\Model\Triangle;

class GeometryController extends AbstractController
{

    #[Route('/circle/{radius}', name: 'circle', methods: ['GET'], requirements: ["radius" => "\d+"])]
    public function getCircleSurfaceAreaAndCircumference(float $radius): JsonResponse
    {

        $circle = new Circle($radius);
        $surface = round($circle->calculateSurface(), 3, PHP_ROUND_HALF_DOWN);
        $circumference = round($circle->calculateDiameter(), 3, PHP_ROUND_HALF_DOWN);

        return $this->json([
            "type" => "circle",
            "radius" => $radius,
            "surface" => $surface,
            "circumference" => $circumference,
        ]);
    }

    #[Route('/triangle/{a}/{b}/{c}', name: 'triangle', methods: ['GET'], requirements: ["a" => "\d+", "b" => "\d+", "c" => "\d+"])]
    public function getTriangleSurfaceAreaAndCircumference(float $a, float $b, float $c): JsonResponse
    {

        $triangle = new Triangle($a, $b, $c);
        $surface = round($triangle->calculateSurface(), 3, PHP_ROUND_HALF_DOWN);
        $circumference = round($triangle->calculateDiameter(), 3, PHP_ROUND_HALF_DOWN);

        return $this->json([
            "type" => "triangle",
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "surface" => $surface,
            "circumference" => $circumference 
        ]);
    }
}
