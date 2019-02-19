<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptTakr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptTakrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTakr();

        $this->assertSame('Takr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('321', $script->number());
        $this->assertSame(array('𑛀', '𑛁', '𑛂', '𑛃', '𑛄', '𑛅', '𑛆', '𑛇', '𑛈', '𑛉'), $script->numerals());
        $this->assertSame('Takri', $script->unicodeName());
    }
}
