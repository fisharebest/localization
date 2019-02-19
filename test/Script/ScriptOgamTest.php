<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptOgam class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptOgamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOgam();

        $this->assertSame('Ogam', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('212', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Ogham', $script->unicodeName());
    }
}
