<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\TerritorySy;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritorySy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\TerritorySy
 */
class TerritorySyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritorySy();

        self::assertSame('SY', $territory->code());
        self::assertSame(6, $territory->firstDay());
        self::assertSame(5, $territory->weekendStart());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
