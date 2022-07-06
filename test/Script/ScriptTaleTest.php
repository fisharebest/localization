<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTale class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTaleTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTale();

        $this->assertSame('Tale', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('353', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tai_Le', $script->unicodeName());
    }
}
