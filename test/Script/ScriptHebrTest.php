<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArab class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptHebrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHebr();

        $this->assertSame('Hebr', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('125', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Hebrew', $script->unicodeName());
    }
}
