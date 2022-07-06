<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptToto class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTotoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptToto();

        $this->assertSame('Toto', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('294', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Toto', $script->unicodeName());
    }
}
