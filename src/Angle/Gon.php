<?php

namespace Hypatia\Angle;

class Gon extends Angle
{
    function toDeg(): float
    {
        return Gon\to_deg($this->value);
    }

    function toRad(): float
    {
        return Gon\to_rad($this->value);
    }

    function toTurn(): float
    {
        return Gon\to_turn($this->value);
    }


    public function __toString(): string
    {
        return $this->value . ' gon';
    }
}