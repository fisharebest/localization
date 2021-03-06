<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCirt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptCirtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCirt();

        $this->assertSame('Cirt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('291', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertNull($script->unicodeName());
    }
}
