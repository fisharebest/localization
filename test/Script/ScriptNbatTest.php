<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNbat class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptNbatTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNbat();

        $this->assertSame('Nbat', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('159', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Nabataean', $script->unicodeName());
    }
}
