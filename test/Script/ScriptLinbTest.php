<?php namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptLinb class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptLinbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLinb();

        $this->assertSame('Linb', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('401', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Linear_B', $script->unicodeName());
    }
}
