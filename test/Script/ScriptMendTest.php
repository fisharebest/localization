<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMend;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMend class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMend
 */
class ScriptMendTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMend();

        self::assertSame('Mend', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('438', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mende_Kikakui', $script->unicodeName());
    }
}
