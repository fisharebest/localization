<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSaur class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSaurTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSaur();

        self::assertSame('Saur', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('344', $script->number());
        self::assertSame(array('꣐', '꣑', '꣒', '꣓', '꣔', '꣕', '꣖', '꣗', '꣘', '꣙'), $script->numerals());
        self::assertSame('Saurashtra', $script->unicodeName());
    }
}
