<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptArab;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArab class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptArab
 */
class ScriptArabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptArab();

        self::assertSame('Arab', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('160', $script->number());
        self::assertSame(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), $script->numerals());
        self::assertSame('Arabic', $script->unicodeName());
    }
}
