<?php

namespace Fisharebest\Localization\Variant;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the VariantPosix class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
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
