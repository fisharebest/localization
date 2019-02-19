<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptBatk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptBatkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBatk();

        $this->assertSame('Batk', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('365', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Batak', $script->unicodeName());
    }
}
