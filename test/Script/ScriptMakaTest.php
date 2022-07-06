<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMakaTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMakaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMaka();

        $this->assertSame('Maka', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('366', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Makasar', $script->unicodeName());
    }
}
