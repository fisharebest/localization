<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptTaml class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptTamlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTaml();

        $this->assertSame('Taml', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('346', $script->number());
        $this->assertSame(array('௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯'), $script->numerals());
        $this->assertSame('Tamil', $script->unicodeName());
    }
}
