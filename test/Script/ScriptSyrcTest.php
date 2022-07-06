<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSyrc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSyrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSyrc();

        $this->assertSame('Syrc', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('135', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Syriac', $script->unicodeName());
    }
}
