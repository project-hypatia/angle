<?php

namespace Hypatia\Angle\Rad;

function to_gon(float $rad): float
{
    return $rad * 200 / pi();
}

function to_deg(float $rad): float
{
    return rad2deg($rad);
}

function to_turn(float $rad): float
{
    return $rad / (2 * pi());
}