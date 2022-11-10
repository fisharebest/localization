<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptOgam;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOgam class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptOgam
 */
class ScriptOgamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOgam();

        self::assertSame('Ogam', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('212', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ogham', $script->unicodeName());
    }
}
