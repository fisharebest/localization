<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryTa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryTaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new TerritoryTa();

        $this->assertSame('TA', $territory->code());
        $this->assertSame(1, $territory->firstDay());
        $this->assertSame(6, $territory->weekendStart());
        $this->assertSame(0, $territory->weekendEnd());
        $this->assertSame('metric', $territory->measurementSystem());
        $this->assertSame('A4', $territory->paperSize());
    }
}
