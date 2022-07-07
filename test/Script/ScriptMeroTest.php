<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMero class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMeroTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMero();

        self::assertSame('Mero', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('100', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Meroitic_Hieroglyphs', $script->unicodeName());
    }
}
