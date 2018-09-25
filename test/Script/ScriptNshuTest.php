<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptNshu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptNshuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNshu();

        $this->assertSame('Nshu', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('499', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Nushu', $script->unicodeName());
    }
}
