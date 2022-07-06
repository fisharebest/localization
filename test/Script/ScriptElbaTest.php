<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElba class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptElbaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptElba();

        $this->assertSame('Elba', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('226', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Elbasan', $script->unicodeName());
    }
}
