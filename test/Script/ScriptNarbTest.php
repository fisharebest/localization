<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNarb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptNarbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNarb();

        $this->assertSame('Narb', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('106', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_North_Arabian', $script->unicodeName());
    }
}
