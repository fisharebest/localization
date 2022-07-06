<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMero class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptMeroTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMero();

        $this->assertSame('Mero', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('100', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Meroitic_Hieroglyphs', $script->unicodeName());
    }
}
