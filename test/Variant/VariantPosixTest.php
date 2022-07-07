<?php

namespace Fisharebest\Localization\Variant;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantPosix class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class VariantPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $variant = new VariantPosix();

        self::assertSame('posix', $variant->code());
    }
}
