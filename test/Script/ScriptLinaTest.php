<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptLina class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptLinaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLina();

        $this->assertSame('Lina', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('400', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Linear_A', $script->unicodeName());
    }
}
