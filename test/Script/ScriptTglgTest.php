<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTglg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTglg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTglg
 */
class ScriptTglgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTglg();

        self::assertSame('Tglg', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('370', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tagalog', $script->unicodeName());
    }
}
