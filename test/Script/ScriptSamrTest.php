<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSamr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSamrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSamr();

        $this->assertSame('Samr', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('123', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Samaritan', $script->unicodeName());
    }
}
