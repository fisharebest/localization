<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBuhd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBuhdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBuhd();

        $this->assertSame('Buhd', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('372', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Buhid', $script->unicodeName());
    }
}
