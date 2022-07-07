<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMerc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMercTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMerc();

        self::assertSame('Merc', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('101', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Meroitic_Cursive', $script->unicodeName());
    }
}
