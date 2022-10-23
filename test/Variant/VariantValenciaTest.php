<?php

namespace Fisharebest\LocalizationTest\Variant;

use Fisharebest\Localization\Variant\VariantValencia;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantValencia class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class VariantValenciaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $variant = new VariantValencia();

        self::assertSame('valencia', $variant->code());
    }
}
