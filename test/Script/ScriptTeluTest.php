<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTelu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptTeluTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTelu();

        $this->assertSame('Telu', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('340', $script->number());
        $this->assertSame(array('౦', '౧', '౨', '౩', '౪', '౫', '౬', '౭', '౮', '౯'), $script->numerals());
        $this->assertSame('Telugu', $script->unicodeName());
    }
}
