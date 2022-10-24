<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\TerritorySd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritorySd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\TerritorySd
 */
class TerritorySdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritorySd();

        self::assertSame('SD', $territory->code());
        self::assertSame(6, $territory->firstDay());
        self::assertSame(5, $territory->weekendStart());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
