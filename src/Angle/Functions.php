<?php

namespace Hypatia\Angle;


function is_right(callable $to_turn, float $value): bool
{
    return (fn($aturn) => in_array($aturn - (int) $aturn, [1/4, 3/4]))(abs($to_turn($value)));
}

function is_straight(callable $to_turn, float $value): bool
{
    return (fn($aturn) => ($aturn - (int) $aturn) == 0.5)(abs($to_turn($value)));
}

function is_perigon(callable $to_turn, float $value): bool
{
    return fmod(abs($to_turn($value)), 1) == 0;
}

