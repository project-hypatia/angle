<?php

namespace Hypatia\Angle\Deg;

use Hypatia\Angle\Dms;
use function Hypatia\Angle\Dms\compute_from_rest;
use function Hypatia\Angle\is_right as angle_is_right;
use function Hypatia\Angle\is_straight as angle_is_straight;
use function Hypatia\Angle\is_perigon as angle_is_perigon;


function to_gon(float $deg): float
{
    return $deg * 200 / 180.0;
}

function to_rad(float $deg): float
{
    return deg2rad($deg);
}

function to_turn(float $deg): float
{
    return $deg / 360.0;
}

function to_dms (float $deg): array
{
    $adeg = abs($deg);

    $do = compute_from_rest($adeg);
    $mo = compute_from_rest(end($do));
    $s  = end($mo);

    return [
        $deg < 0 ? -1 * reset($do) : reset($do),
        reset($mo),
        $s
    ];
}

/**
 * Checks whether current angle is right (90° or 270°), even if there are 
 * several turns.
 *
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
 * @param float $deg
 * @return boolean
 */
function is_straight(float $deg): bool
{
    return angle_is_straight(to_turn, $deg);
}

function is_perigon(float $deg): bool
{
    return angle_is_perigon(to_turn, $deg);
}

function are_complementary(float $deg1, float $deg2): bool
{
    return is_right($deg1 + $deg2);
}

function are_suplementary(float $deg1, float $deg2): bool
{
    return is_straight($deg1 + $deg2);
}

const to_turn   = '\Hypatia\Angle\Deg\to_turn';
const to_gon    = '\Hypatia\Angle\Deg\to_gon';
const to_rad    = '\Hypatia\Angle\Deg\to_rad';

const is_right      = '\Hypatia\Angle\Deg\is_right';
const is_straight   = '\Hypatia\Angle\Deg\is_straight';
const is_perigon    = '\Hypatia\Angle\Deg\is_perigon';

const are_complementary = '\Hypatia\Angle\Deg\are_complementary';
const are_suplementary  = '\Hypatia\Angle\Deg\are_suplementary';