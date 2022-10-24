<?php

namespace Fisharebest\LocalizationTest\Territory;

use Fisharebest\Localization\Territory\Territory061;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the Territory061 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Territory\AbstractTerritory
 * @covers \Fisharebest\Localization\Territory\Territory061
 */
class Territory061Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new Territory061();

        self::assertSame('061', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
