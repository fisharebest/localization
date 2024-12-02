<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCakm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCakm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCakm
 */
class ScriptCakmTest extends TestCase
{
    public function testProperties(): void
    {
        $script = new ScriptCakm();

        self::assertSame('Cakm', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('349', $script->number());
        self::assertSame(['𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'], $script->numerals());
        self::assertSame('Chakma', $script->unicodeName());
    }
}
