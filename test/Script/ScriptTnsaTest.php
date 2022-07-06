<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTnsa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTnsaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTnsa();

        $this->assertSame('Tnsa', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('275', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tangsa', $script->unicodeName());
    }
}
