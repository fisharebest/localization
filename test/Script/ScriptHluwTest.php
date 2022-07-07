<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHluw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHluwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHluw();

        self::assertSame('Hluw', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Anatolian_Hieroglyphs', $script->unicodeName());
    }
}
