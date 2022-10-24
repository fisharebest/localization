<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\TerritoryCw;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryCw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\TerritoryCw
 */
class TerritoryCwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritoryCw();

        self::assertSame('CW', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
