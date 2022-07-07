<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMani class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptManiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMani();

        self::assertSame('Mani', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('139', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Manichaean', $script->unicodeName());
    }
}
