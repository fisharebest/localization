<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPalm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPalmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPalm();

        $this->assertSame('Palm', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('126', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Palmyrene', $script->unicodeName());
    }
}
