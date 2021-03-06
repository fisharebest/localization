<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLydi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLydiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLydi();

        $this->assertSame('Lydi', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('116', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Lydian', $script->unicodeName());
    }
}
