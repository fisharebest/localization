<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTavt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptTavtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTavt();

        $this->assertSame('Tavt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('359', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tai_Viet', $script->unicodeName());
    }
}
