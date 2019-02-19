<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the TerritoryGt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new TerritoryGt();

        $this->assertSame('GT', $territory->code());
        $this->assertSame(0, $territory->firstDay());
        $this->assertSame(6, $territory->weekendStart());
        $this->assertSame(0, $territory->weekendEnd());
        $this->assertSame('metric', $territory->measurementSystem());
        $this->assertSame('US-Letter', $territory->paperSize());
    }
}
