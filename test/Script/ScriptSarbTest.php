<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSarb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSarb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSarb
 */
class ScriptSarbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSarb();

        self::assertSame('Sarb', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('105', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_South_Arabian', $script->unicodeName());
    }
}
