<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMand class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMand();

        $this->assertSame('Mand', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('140', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Mandaic', $script->unicodeName());
    }
}
