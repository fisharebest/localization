<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptNewa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptNewaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNewa();

        $this->assertSame('Newa', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('333', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Newa', $script->unicodeName());
    }
}
