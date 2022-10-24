<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHung;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHung class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHung
 */
class ScriptHungTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHung();

        self::assertSame('Hung', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('176', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Hungarian', $script->unicodeName());
    }
}
