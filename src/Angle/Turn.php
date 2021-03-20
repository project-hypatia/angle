<?php

namespace Hypatia\Angle;

class Turn extends Angle
{
    function toDeg(): float
    {
        return Turn\to_deg($this->value);
    }

    function toRad(): float
    {
        return Turn\to_rad($this->value);
    }

    function toGon(): float
    {
        return Turn\to_gon($this->value);
    }
}