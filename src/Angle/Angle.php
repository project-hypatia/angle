<?php

namespace Hypatia\Angle;

abstract class Angle
{
    protected float $value = 0.0;

    public function __construct(float $angle = 0.0)
    {
        $this->value = $angle;
    }

    public function get(): float
    {
        return $this->value;
    }

    public function __toString()
    {
        return sprintf('%f', $this->value);
    }
}