<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptThai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptThaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptThai();

        $this->assertSame('Thai', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('352', $script->number());
        $this->assertSame(array('๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'), $script->numerals());
        $this->assertSame('Thai', $script->unicodeName());
    }
}
