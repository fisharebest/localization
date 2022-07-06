<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBatk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBatkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBatk();

        $this->assertSame('Batk', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('365', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Batak', $script->unicodeName());
    }
}
