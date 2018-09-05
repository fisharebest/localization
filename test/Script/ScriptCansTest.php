<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptCans class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptCansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCans();

        $this->assertSame('Cans', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('440', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Canadian_Aboriginal', $script->unicodeName());
    }
}
