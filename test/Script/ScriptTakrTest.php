<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTakr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTakr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTakr
 */
class ScriptTakrTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptTakr();

        self::assertSame('Takr', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('321', $script->number());
        self::assertSame(['𑛀', '𑛁', '𑛂', '𑛃', '𑛄', '𑛅', '𑛆', '𑛇', '𑛈', '𑛉'], $script->numerals());
        self::assertSame('Takri', $script->unicodeName());
    }
}
