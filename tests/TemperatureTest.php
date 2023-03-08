<?php

namespace Kisssg\UnitConversions\Tests;

use Kisssg\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celcius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(20)->toFahrenheit();

        $this->assertEquals(68, $fahrenheit);
    }
}
