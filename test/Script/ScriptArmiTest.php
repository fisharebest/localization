<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptArmiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptArmi();

        $this->assertSame('Armi', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('124', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Imperial_Aramaic', $script->unicodeName());
    }
}
