<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTavt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTavt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTavt
 */
class ScriptTavtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTavt();

        self::assertSame('Tavt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('359', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tai_Viet', $script->unicodeName());
    }
}
