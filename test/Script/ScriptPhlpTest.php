<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhlp class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhlpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhlp();

        $this->assertSame('Phlp', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('132', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Psalter_Pahlavi', $script->unicodeName());
    }
}
