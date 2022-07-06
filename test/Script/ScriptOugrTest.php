<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOugr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOugrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOugr();

        $this->assertSame('Ougr', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('143', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_Uyghur', $script->unicodeName());
    }
}
