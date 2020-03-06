<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSarb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
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
