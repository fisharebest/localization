<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCopt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptCoptTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCopt();

        $this->assertSame('Copt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('204', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Coptic', $script->unicodeName());
    }
}
