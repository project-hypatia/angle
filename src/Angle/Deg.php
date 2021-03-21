<?php

namespace Hypatia\Angle;

use Hypatia\Angle\Deg\Converter;

class Deg extends Angle
{
    function toGon(): Gon
    {
        return new Gon(Converter\to_gon($this->value));
    }

    function toRad(): Rad
    {
        return new Rad(Converter\to_rad($this->value));
    }

    function toTurn(): Turn
    {
        return new Turn(Converter\to_turn($this->value));
    }

    function toDms(): Dms
    {
        return new Dms(...Converter\to_dms($this->value));
    }

    public function __toString(): string
    {
        return $this->value . '°';
    }
}