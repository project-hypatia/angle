<?php

namespace Hypatia\Angle\Deg\Unary;

use Hypatia\Angle\Deg\Converter;
use function Hypatia\Angle\is_right as angle_is_right;
use function Hypatia\Angle\is_straight as angle_is_straight;
use function Hypatia\Angle\is_perigon as angle_is_perigon;

/**
 * Checks whether current angle is right (90° or 270°), even if there are 
 * several turns.
 *
 * @param float $deg
 * @return boolean
 */
function is_right(float $deg): bool
{
    return angle_is_right(Converter\to_turn, $deg);
}

/**
 * Checks whether current angle is straight (180°), even if there are several 
 * turns.
 * 
 * @param float $deg
 * @return boolean
 */
function is_straight(float $deg): bool
{
    return angle_is_straight(Converter\to_turn, $deg);
}

function is_perigon(float $deg): bool
{
    return angle_is_perigon(Converter\to_turn, $deg);
}



const is_right      = '\Hypatia\Angle\Deg\Unary\is_right';
const is_straight   = '\Hypatia\Angle\Deg\Unary\is_straight';
const is_perigon    = '\Hypatia\Angle\Deg\Unary\is_perigon';