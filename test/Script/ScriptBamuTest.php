<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBamu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptBamuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBamu();

        $this->assertSame('Bamu', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('435', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Bamum', $script->unicodeName());
    }
}
