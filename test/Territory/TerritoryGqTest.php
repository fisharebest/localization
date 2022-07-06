<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryGq class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryGqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new TerritoryGq();

        $this->assertSame('GQ', $territory->code());
        $this->assertSame(1, $territory->firstDay());
        $this->assertSame(6, $territory->weekendStart());
        $this->assertSame(0, $territory->weekendEnd());
        $this->assertSame('metric', $territory->measurementSystem());
        $this->assertSame('A4', $territory->paperSize());
    }
}
