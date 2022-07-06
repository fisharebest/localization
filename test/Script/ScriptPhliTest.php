<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhli class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPhliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhli();

        $this->assertSame('Phli', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('131', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Inscriptional_Pahlavi', $script->unicodeName());
    }
}
