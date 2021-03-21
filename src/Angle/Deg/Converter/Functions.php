<?php

namespace Hypatia\Angle\Deg\Converter;

use function Hypatia\Angle\Dms\compute_from_rest;

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

const to_turn   = '\Hypatia\Angle\Deg\Converter\to_turn';
const to_gon    = '\Hypatia\Angle\Deg\Converter\to_gon';
const to_rad    = '\Hypatia\Angle\Deg\Converter\to_rad';
const to_dms    = '\Hypatia\Angle\Deg\Converter\to_dms';