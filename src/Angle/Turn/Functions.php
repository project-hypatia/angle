<?php

namespace Hypatia\Angle\Turn;

function to_gon(float $turn): float
{
    return $turn * 400.0;
}

function to_rad(float $turn): float
{
    return $turn * 2 * pi();
}

function to_deg(float $turn): float
{
    return $turn * 360.0;
}

