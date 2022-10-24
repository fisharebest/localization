<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptAhom;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAhom class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptAhom
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
