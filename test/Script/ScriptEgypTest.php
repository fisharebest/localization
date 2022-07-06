<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEgyp class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptEgypTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptEgyp();

        $this->assertSame('Egyp', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('050', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Egyptian_Hieroglyphs', $script->unicodeName());
    }
}
