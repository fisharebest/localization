<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptRohg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRohg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptRohg
 */
class ScriptRohgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptRohg();

        self::assertSame('Rohg', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('167', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Hanifi_Rohingya', $script->unicodeName());
    }
}
