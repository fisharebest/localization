<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptHrkt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptHrktTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHrkt();

        $this->assertSame('Hrkt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('412', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Katakana_Or_Hiragana', $script->unicodeName());
    }
}
