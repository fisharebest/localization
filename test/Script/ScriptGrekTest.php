<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptGrek class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptGrekTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGrek();

        $this->assertSame('Grek', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Greek', $script->unicodeName());
    }
}
