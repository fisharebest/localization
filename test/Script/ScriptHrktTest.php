<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHrkt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHrktTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHrkt();

        self::assertSame('Hrkt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('412', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Katakana_Or_Hiragana', $script->unicodeName());
    }
}
