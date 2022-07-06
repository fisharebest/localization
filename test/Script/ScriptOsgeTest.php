<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOsge class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOsgeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOsge();

        $this->assertSame('Osge', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('219', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Osage', $script->unicodeName());
    }
}
