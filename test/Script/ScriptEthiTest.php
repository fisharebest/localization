<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEthi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptEthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptEthi();

        $this->assertSame('Ethi', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('430', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Ethiopic', $script->unicodeName());
    }
}
