<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptThai;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptThai class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptThaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptThai();

        self::assertSame('Thai', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('352', $script->number());
        self::assertSame(array('๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'), $script->numerals());
        self::assertSame('Thai', $script->unicodeName());
    }
}
