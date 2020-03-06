<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHatr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptHatrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHatr();

        $this->assertSame('Hatr', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('127', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Hatran', $script->unicodeName());
    }
}
