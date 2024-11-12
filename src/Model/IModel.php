<?php

namespace App\Model;

interface IModel
{

    function calculateSurface(): float;

    function calculateDiameter(): float;
}