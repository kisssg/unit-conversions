<?php

namespace Kisssg\UnitConversions;
use Exception;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self {
        $myArr = [
            'test',
            'test2',
        ];

        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
