<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOsma class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOsmaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOsma();

        $this->assertSame('Osma', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('260', $script->number());
        $this->assertSame(array('𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'), $script->numerals());
        $this->assertSame('Osmanya', $script->unicodeName());
    }
}
