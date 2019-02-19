<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptMlym class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
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
