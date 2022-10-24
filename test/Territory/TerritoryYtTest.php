<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\TerritoryYt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryYt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\TerritoryYt
 */
class TerritoryYtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritoryYt();

        self::assertSame('YT', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
