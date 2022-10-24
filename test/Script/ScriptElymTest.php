<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptElym;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElym class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptElym
 */
class ScriptElymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptElym();

        self::assertSame('Elym', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('128', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Elymaic', $script->unicodeName());
    }
}
