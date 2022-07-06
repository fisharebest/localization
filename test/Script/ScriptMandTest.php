<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMand class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMand();

        $this->assertSame('Mand', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('140', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Mandaic', $script->unicodeName());
    }
}
