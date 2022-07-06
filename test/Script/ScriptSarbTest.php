<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSarb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSarbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSarb();

        $this->assertSame('Sarb', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('105', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_South_Arabian', $script->unicodeName());
    }
}
