<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryTz class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryTzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new TerritoryTz();

        self::assertSame('TZ', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
