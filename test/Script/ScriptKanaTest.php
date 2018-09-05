<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptKana class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptKanaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKana();

        $this->assertSame('Kana', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('411', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Katakana', $script->unicodeName());
    }
}
