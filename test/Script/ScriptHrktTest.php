<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHrkt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHrkt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHrkt
 */
class ScriptHrktTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHrkt();

        self::assertSame('Hrkt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('412', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Katakana_Or_Hiragana', $script->unicodeName());
    }
}
