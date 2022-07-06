<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNewa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNewaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNewa();

        $this->assertSame('Newa', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('333', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Newa', $script->unicodeName());
    }
}
