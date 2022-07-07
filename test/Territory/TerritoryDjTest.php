<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryDj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryDjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new TerritoryDj();

        self::assertSame('DJ', $territory->code());
        self::assertSame(6, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
