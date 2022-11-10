<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSyrc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSyrc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSyrc
 */
class ScriptSyrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSyrc();

        self::assertSame('Syrc', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('135', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Syriac', $script->unicodeName());
    }
}
