<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHatr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHatr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHatr
 */
class ScriptHatrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHatr();

        self::assertSame('Hatr', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('127', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hatran', $script->unicodeName());
    }
}
