<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptSylo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyloTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSylo();

        $this->assertSame('Sylo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('316', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Syloti_Nagri', $script->unicodeName());
    }
}
