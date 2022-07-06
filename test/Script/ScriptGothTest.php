<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGoth class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptGothTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGoth();

        $this->assertSame('Goth', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('206', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Gothic', $script->unicodeName());
    }
}
