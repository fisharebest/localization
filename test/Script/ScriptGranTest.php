<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGran class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptGranTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGran();

        $this->assertSame('Gran', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('343', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Grantha', $script->unicodeName());
    }
}
