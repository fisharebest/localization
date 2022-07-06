<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptThaa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptThaaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptThaa();

        $this->assertSame('Thaa', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('170', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Thaana', $script->unicodeName());
    }
}
