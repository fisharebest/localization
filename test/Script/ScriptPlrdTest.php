<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptPlrd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptPlrdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPlrd();

        $this->assertSame('Plrd', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('282', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Miao', $script->unicodeName());
    }
}
