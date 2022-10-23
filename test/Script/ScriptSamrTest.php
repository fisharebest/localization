<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSamr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSamr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSamrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSamr();

        self::assertSame('Samr', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('123', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Samaritan', $script->unicodeName());
    }
}
