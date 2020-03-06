<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAhom class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptAhomTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAhom();

        $this->assertSame('Ahom', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('338', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Ahom', $script->unicodeName());
    }
}
