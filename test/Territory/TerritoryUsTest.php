<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\TerritoryUs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryUs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\TerritoryUs
 */
class TerritoryUsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritoryUs();

        self::assertSame('US', $territory->code());
        self::assertSame(0, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
