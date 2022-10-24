<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPalm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPalm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPalm
 */
class ScriptPalmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPalm();

        self::assertSame('Palm', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('126', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Palmyrene', $script->unicodeName());
    }
}
