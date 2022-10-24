<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\Territory035;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the Territory035 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\Territory035
 */
class Territory035Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new Territory035();

        self::assertSame('035', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
