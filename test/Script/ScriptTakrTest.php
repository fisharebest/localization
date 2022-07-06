<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTakr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTakrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTakr();

        $this->assertSame('Takr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('321', $script->number());
        $this->assertSame(array('𑛀', '𑛁', '𑛂', '𑛃', '𑛄', '𑛅', '𑛆', '𑛇', '𑛈', '𑛉'), $script->numerals());
        $this->assertSame('Takri', $script->unicodeName());
    }
}
