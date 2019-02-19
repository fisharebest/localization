<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptMult class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMultTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMult();

        $this->assertSame('Mult', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('323', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Multani', $script->unicodeName());
    }
}
