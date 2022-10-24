<?php

namespace Fisharebest\LocalizationTest\Variant;

use Fisharebest\Localization\Variant\VariantPosix;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantPosix class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Variant\VariantPosix
 */
class VariantPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $variant = new VariantPosix();

        self::assertSame('posix', $variant->code());
    }
}
