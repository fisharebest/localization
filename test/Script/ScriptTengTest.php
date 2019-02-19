<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptTeng class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptTengTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTeng();

        $this->assertSame('Teng', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('290', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertNull($script->unicodeName());
    }
}
