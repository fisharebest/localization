<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptOsma;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOsma class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptOsma
 */
class ScriptOsmaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOsma();

        self::assertSame('Osma', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('260', $script->number());
        self::assertSame(['𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'], $script->numerals());
        self::assertSame('Osmanya', $script->unicodeName());
    }
}
