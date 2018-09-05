<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptMedfTest class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptMedfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMedf();

        $this->assertSame('Medf', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('265', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Medefaidrin', $script->unicodeName());
    }
}
