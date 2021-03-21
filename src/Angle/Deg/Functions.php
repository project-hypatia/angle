<?php

namespace Hypatia\Angle\Deg;


use function Hypatia\Angle\is_right as angle_is_right;
use function Hypatia\Angle\is_straight as angle_is_straight;
use function Hypatia\Angle\is_perigon as angle_is_perigon;

/**
 * Checks whether current angle is right (90° or 270°), even if there are 
 * several turns.
 *
 * @todo move to Deg\Unary
 * @param float $deg
 * @return boolean
 */
function is_right(float $deg): bool
{
    return angle_is_right(to_turn, $deg);
}

/**
 * Checks whether current angle is straight (180°), even if there are several 
 * turns.
 * 
 * @todo move to Deg\Unary
 * @param float $deg
 * @return boolean
 */
function is_straight(float $deg): bool
{
    return angle_is_straight(to_turn, $deg);
}

//  @todo move to Deg\Unary
function is_perigon(float $deg): bool
{
    return angle_is_perigon(to_turn, $deg);
}

// @todo move to Deg\Binary
function are_complementary(float $deg1, float $deg2): bool
{
    return is_right($deg1 + $deg2);
}

// @todo move to Deg\Binary
function are_suplementary(float $deg1, float $deg2): bool
{
    return is_straight($deg1 + $deg2);
}



const is_right      = '\Hypatia\Angle\Deg\is_right';
const is_straight   = '\Hypatia\Angle\Deg\is_straight';
const is_perigon    = '\Hypatia\Angle\Deg\is_perigon';

const are_complementary = '\Hypatia\Angle\Deg\are_complementary';
const are_suplementary  = '\Hypatia\Angle\Deg\are_suplementary';