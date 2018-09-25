<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptPhag class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptPhagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhag();

        $this->assertSame('Phag', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('331', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Phags_Pa', $script->unicodeName());
    }
}
