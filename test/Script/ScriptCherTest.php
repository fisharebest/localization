<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCher class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCherTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCher();

        $this->assertSame('Cher', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('445', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Cherokee', $script->unicodeName());
    }
}
