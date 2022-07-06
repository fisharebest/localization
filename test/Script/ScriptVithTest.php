<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptVith class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptVithTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptVith();

        $this->assertSame('Vith', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('228', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Vithkuqi', $script->unicodeName());
    }
}
