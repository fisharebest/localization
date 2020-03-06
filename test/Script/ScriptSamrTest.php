<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSamr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
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
