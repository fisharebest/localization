<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDiak class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDiakTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDiak();

        $this->assertSame('Diak', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('342', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Dives_Akuru', $script->unicodeName());
    }
}
