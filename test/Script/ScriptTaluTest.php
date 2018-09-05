<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptTalu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptTaluTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTalu();

        $this->assertSame('Talu', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('354', $script->number());
        $this->assertSame(array('᧐', '᧑', '᧒', '᧓', '᧔', '᧕', '᧖', '᧗', '᧘', '᧙'), $script->numerals());
        $this->assertSame('New_Tai_Lue', $script->unicodeName());
    }
}
