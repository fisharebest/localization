<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptOrkh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOrkh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptOrkh
 */
class ScriptOrkhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOrkh();

        self::assertSame('Orkh', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('175', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Turkic', $script->unicodeName());
    }
}
