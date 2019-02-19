<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptKali class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
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
