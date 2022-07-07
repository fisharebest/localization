<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKali class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKaliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKali();

        self::assertSame('Kali', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('357', $script->number());
        self::assertSame(array('꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'), $script->numerals());
        self::assertSame('Kayah_Li', $script->unicodeName());
    }
}
