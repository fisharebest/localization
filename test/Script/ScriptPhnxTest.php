<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPhnx;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhnx class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPhnx
 */
class ScriptPhnxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhnx();

        self::assertSame('Phnx', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('115', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Phoenician', $script->unicodeName());
    }
}
