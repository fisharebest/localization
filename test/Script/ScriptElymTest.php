<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElymTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptElymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptElym();

        $this->assertSame('Elym', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('128', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Elymaic', $script->unicodeName());
    }
}
