<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptYezi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptYeziTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptYezi();

        $this->assertSame('Yezi', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('192', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Yezidi', $script->unicodeName());
    }
}
