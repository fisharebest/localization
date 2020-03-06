<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhag class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
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
