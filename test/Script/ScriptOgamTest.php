<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOgam class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOgamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOgam();

        $this->assertSame('Ogam', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('212', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Ogham', $script->unicodeName());
    }
}
