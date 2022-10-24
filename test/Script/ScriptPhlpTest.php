<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPhlp;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhlp class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPhlp
 */
class ScriptPhlpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPhlp();

        self::assertSame('Phlp', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('132', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Psalter_Pahlavi', $script->unicodeName());
    }
}
