<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptEgyp class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptEgypTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptEgyp();

        $this->assertSame('Egyp', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('050', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Egyptian_Hieroglyphs', $script->unicodeName());
    }
}
