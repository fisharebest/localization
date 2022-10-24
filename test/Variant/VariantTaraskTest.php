<?php

namespace Fisharebest\LocalizationTest\Variant;

use Fisharebest\Localization\Variant\VariantTarask;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantTarask class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Variant\VariantTarask
 */
class VariantTaraskTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $variant = new VariantTarask();

        self::assertSame('tarask', $variant->code());
    }
}
