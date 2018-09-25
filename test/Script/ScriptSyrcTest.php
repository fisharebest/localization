<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptSyrc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSyrc();

        $this->assertSame('Syrc', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('135', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Syriac', $script->unicodeName());
    }
}
