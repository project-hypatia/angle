<?php

namespace Hypatia\Angle;

class Rad extends Angle
{
    function toGon(): float
    {
        return Rad\to_gon($this->value);
    }

    function toDeg(): float
    {
        return Rad\to_deg($this->value);
    }

    function toTurn(): float
    {
        return Rad\to_turn($this->value);
    }
}