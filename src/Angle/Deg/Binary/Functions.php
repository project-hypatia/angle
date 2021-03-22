<?php

namespace Hypatia\Angle\Deg\Binary;

use Hypatia\Angle\Deg\Unary;

use Garp\Functional as f;

function are_complementary(float $deg1, float $deg2 = null)
{
    return f\autocurry(
        fn($deg1, $deg2) => Unary\is_right($deg1 + $deg2),
        2
    )(...\func_get_args());
}

function are_suplementary(float $deg1, float $deg2 = null)
{
    return f\autocurry(
        fn($deg1, $deg2) => Unary\is_straight($deg1 + $deg2),
        2
    )(...\func_get_args());
}

const are_complementary = '\Hypatia\Angle\Deg\Binary\are_complementary';
const are_suplementary  = '\Hypatia\Angle\Deg\Binary\are_suplementary';