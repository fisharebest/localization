<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptVaii class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptVaiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptVaii();

        $this->assertSame('Vaii', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('470', $script->number());
        $this->assertSame(array('꘠', '꘡', '꘢', '꘣', '꘤', '꘥', '꘦', '꘧', '꘨', '꘩'), $script->numerals());
        $this->assertSame('Vai', $script->unicodeName());
    }
}
