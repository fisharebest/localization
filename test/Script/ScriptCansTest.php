<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCans class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCans();

        $this->assertSame('Cans', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('440', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Canadian_Aboriginal', $script->unicodeName());
    }
}
