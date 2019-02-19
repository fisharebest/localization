<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptGoth class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptGothTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGoth();

        $this->assertSame('Goth', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('206', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Gothic', $script->unicodeName());
    }
}
