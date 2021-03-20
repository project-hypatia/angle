<?php

namespace Hypatia\Angle;

class Deg extends Angle
{
    function toGon(): Gon
    {
        return new Gon(Deg\to_gon($this->value));
    }

    function toRad(): Rad
    {
        return new Rad(Deg\to_rad($this->value));
    }

    function toTurn(): Turn
    {
        return new Turn(Deg\to_turn($this->value));
    }

    // TODO
    function toDms()
    {

    }
}