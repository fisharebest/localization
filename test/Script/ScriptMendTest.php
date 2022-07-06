<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMend class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMendTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMend();

        $this->assertSame('Mend', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('438', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Mende_Kikakui', $script->unicodeName());
    }
}
