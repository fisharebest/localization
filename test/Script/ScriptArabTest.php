<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArab class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptArabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptArab();

        $this->assertSame('Arab', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('160', $script->number());
        $this->assertSame(array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'), $script->numerals());
        $this->assertSame('Arabic', $script->unicodeName());
    }
}
