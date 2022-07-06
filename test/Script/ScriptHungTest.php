<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHung class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptHungTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHung();

        $this->assertSame('Hung', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('176', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_Hungarian', $script->unicodeName());
    }
}
