<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMlym class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMlymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMlym();

        $this->assertSame('Mlym', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('347', $script->number());
        $this->assertSame(array('൦', '൧', '൨', '൩', '൪', '൫', '൬', '൭', '൮', '൯'), $script->numerals());
        $this->assertSame('Malayalam', $script->unicodeName());
    }
}
