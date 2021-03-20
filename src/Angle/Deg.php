<?php

namespace Hypatia\Angle;

class Deg extends Angle
{
    function toGon(): float
    {
        return Deg\to_gon($this->value);
    }

    function toRad(): float
    {
        return Deg\to_rad($this->value);
    }

    function toTurn(): float
    {
        return Deg\to_turn($this->value);
    }
}