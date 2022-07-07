<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBrai class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBraiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBrai();

        self::assertSame('Brai', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('570', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Braille', $script->unicodeName());
    }
}
