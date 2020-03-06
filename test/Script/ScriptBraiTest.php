<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBrai class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptBraiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBrai();

        $this->assertSame('Brai', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('570', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Braille', $script->unicodeName());
    }
}
