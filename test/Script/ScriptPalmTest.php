<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPalm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPalmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPalm();

        self::assertSame('Palm', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('126', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Palmyrene', $script->unicodeName());
    }
}
