<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGlag class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGlagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGlag();

        $this->assertSame('Glag', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('225', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Glagolitic', $script->unicodeName());
    }
}
