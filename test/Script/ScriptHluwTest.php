<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHluw;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHluw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHluw
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
        self::assertSame('080', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Anatolian_Hieroglyphs', $script->unicodeName());
    }
}
