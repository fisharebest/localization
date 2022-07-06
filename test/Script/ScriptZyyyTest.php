<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZyyy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZyyyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZyyy();

        $this->assertSame('Zyyy', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('998', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Common', $script->unicodeName());
    }
}
