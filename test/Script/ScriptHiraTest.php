<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHira;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHira class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHira
 */
class ScriptHiraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHira();

        self::assertSame('Hira', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('410', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Hiragana', $script->unicodeName());
    }
}
