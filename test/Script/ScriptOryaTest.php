<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOrya class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptOryaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOrya();

        $this->assertSame('Orya', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('327', $script->number());
        $this->assertSame(array('୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯'), $script->numerals());
        $this->assertSame('Oriya', $script->unicodeName());
    }
}
