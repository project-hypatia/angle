<?php

namespace Hypatia\Angle\Gon;


function to_deg(float $gon): float
{
    return $gon * 180.0 / 200.0;
}

function to_rad(float $gon): float
{
    return $gon * pi() / 200.0;
}

function to_turn(float $gon): float
{
    return $gon / 400.0;
}