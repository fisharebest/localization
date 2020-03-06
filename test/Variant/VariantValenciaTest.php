<?php

namespace Fisharebest\Localization\Variant;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantValencia class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class VariantValenciaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $variant = new VariantValencia();

        $this->assertSame('valencia', $variant->code());
    }
}
