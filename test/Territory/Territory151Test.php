<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\Territory151;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the Territory151 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\Territory151
 */
class Territory151Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $territory = new Territory151();

        self::assertSame('151', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
