<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZanb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZanbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZanb();

        $this->assertSame('Zanb', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('339', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Zanabazar_Square', $script->unicodeName());
    }
}
