<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptRunr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptRunrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptRunr();

        $this->assertSame('Runr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('211', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Runic', $script->unicodeName());
    }
}
