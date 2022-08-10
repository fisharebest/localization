<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptChrs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptChrsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptChrs();

        self::assertSame('Chrs', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('109', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Chorasmian', $script->unicodeName());
    }
}