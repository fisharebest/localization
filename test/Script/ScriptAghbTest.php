<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAghb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptAghbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAghb();

        $this->assertSame('Aghb', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('239', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Caucasian_Albanian', $script->unicodeName());
    }
}
