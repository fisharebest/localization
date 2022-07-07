<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElymTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptElymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptElym();

        self::assertSame('Elym', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('128', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Elymaic', $script->unicodeName());
    }
}
