<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptToto class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTotoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptToto();

        self::assertSame('Toto', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('294', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Toto', $script->unicodeName());
    }
}
