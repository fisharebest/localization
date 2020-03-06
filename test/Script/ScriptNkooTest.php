<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNkoo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptNkooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNkoo();

        $this->assertSame('Nkoo', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('165', $script->number());
        $this->assertSame(array('߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉'), $script->numerals());
        $this->assertSame('Nko', $script->unicodeName());
    }
}
