<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRunr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRunrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptRunr();

        $this->assertSame('Runr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('211', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Runic', $script->unicodeName());
    }
}
