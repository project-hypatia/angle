<?php

namespace Hypatia\Angle;

class Dms 
{
    protected float $d;
    protected float $m;
    protected float $s;

    public function __get($name): float
    {
        return $this->$name;
    }

    public function __construct(float $d, float $m, float $s)
    {
        $this->d = $d;
        $this->m = $m;
        $this->s = $s;
    }

    function __toString(): string
    {
        return Dms\to_string($this);
    }
}
