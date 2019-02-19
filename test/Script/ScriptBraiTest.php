<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptBrai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptBraiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBrai();

        $this->assertSame('Brai', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('570', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Braille', $script->unicodeName());
    }
}
