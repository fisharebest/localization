<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGrek class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGrekTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGrek();

        $this->assertSame('Grek', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Greek', $script->unicodeName());
    }
}
