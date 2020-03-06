<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHluw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptHluwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHluw();

        $this->assertSame('Hluw', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Anatolian_Hieroglyphs', $script->unicodeName());
    }
}
