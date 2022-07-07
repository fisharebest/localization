<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhlp class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPhlpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhlp();

        self::assertSame('Phlp', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('132', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Psalter_Pahlavi', $script->unicodeName());
    }
}
