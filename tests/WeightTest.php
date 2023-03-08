<?php

namespace Kisssg\UnitConversions\Tests;

use Kisssg\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lb()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.46230000000003,$lbs);
    }
}
