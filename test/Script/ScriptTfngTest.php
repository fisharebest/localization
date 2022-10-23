<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTfng;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTfng class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTfngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTfng();

        self::assertSame('Tfng', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('120', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tifinagh', $script->unicodeName());
    }
}
