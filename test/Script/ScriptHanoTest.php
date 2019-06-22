<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHano class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptHanoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHano();

        $this->assertSame('Hano', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('371', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Hanunoo', $script->unicodeName());
    }
}
