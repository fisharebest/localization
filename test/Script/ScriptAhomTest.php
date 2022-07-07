<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAhom class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptAhomTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAhom();

        self::assertSame('Ahom', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('338', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Ahom', $script->unicodeName());
    }
}
