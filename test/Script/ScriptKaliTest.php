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

        $this->assertSame('Kali', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('357', $script->number());
        $this->assertSame(array('꤀', '꤁', '꤂', '꤃', '꤄', '꤅', '꤆', '꤇', '꤈', '꤉'), $script->numerals());
        $this->assertSame('Kayah_Li', $script->unicodeName());
    }
}
