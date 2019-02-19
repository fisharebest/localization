<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptSogo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptSogoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSogo();

        $this->assertSame('Sogo', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('142', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_Sogdian', $script->unicodeName());
    }
}
