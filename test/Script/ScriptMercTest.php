<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMerc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptMercTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMerc();

        $this->assertSame('Merc', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('101', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Meroitic_Cursive', $script->unicodeName());
    }
}
