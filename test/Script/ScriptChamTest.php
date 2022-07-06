<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCham class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptChamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCham();

        $this->assertSame('Cham', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('358', $script->number());
        $this->assertSame(array('꩐', '꩑', '꩒', '꩓', '꩔', '꩕', '꩖', '꩗', '꩘', '꩙'), $script->numerals());
        $this->assertSame('Cham', $script->unicodeName());
    }
}
