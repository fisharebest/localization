<?php

namespace Fisharebest\Localization\Variant;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantPosix class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class VariantPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $variant = new VariantPosix();

        $this->assertSame('posix', $variant->code());
    }
}
