<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the TerritoryGl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new TerritoryGl();

        $this->assertSame('GL', $territory->code());
        $this->assertSame(0, $territory->firstDay());
        $this->assertSame(6, $territory->weekendStart());
        $this->assertSame(0, $territory->weekendEnd());
        $this->assertSame('metric', $territory->measurementSystem());
        $this->assertSame('A4', $territory->paperSize());
    }
}
