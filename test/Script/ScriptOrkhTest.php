<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOrkh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptOrkhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOrkh();

        $this->assertSame('Orkh', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('175', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_Turkic', $script->unicodeName());
    }
}
