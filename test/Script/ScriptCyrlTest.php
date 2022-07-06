<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCyrl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCyrl();

        $this->assertSame('Cyrl', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('220', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Cyrillic', $script->unicodeName());
    }
}
