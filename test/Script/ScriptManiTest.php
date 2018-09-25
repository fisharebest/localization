<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptMani class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptManiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMani();

        $this->assertSame('Mani', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('139', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Manichaean', $script->unicodeName());
    }
}
