<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptHira class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptHiraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHira();

        $this->assertSame('Hira', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('410', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Hiragana', $script->unicodeName());
    }
}
