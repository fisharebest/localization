<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptMend class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMendTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMend();

        $this->assertSame('Mend', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('438', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Mende_Kikakui', $script->unicodeName());
    }
}
