<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptKhar class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptKharTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKhar();

        $this->assertSame('Khar', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('305', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Kharoshthi', $script->unicodeName());
    }
}
