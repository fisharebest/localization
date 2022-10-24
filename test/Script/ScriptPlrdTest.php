<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPlrd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPlrd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPlrd
 */
class ScriptPlrdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPlrd();

        self::assertSame('Plrd', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('282', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Miao', $script->unicodeName());
    }
}
