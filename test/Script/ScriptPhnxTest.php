<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhnx class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhnxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhnx();

        $this->assertSame('Phnx', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('115', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Phoenician', $script->unicodeName());
    }
}
