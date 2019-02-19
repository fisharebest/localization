<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptMakaTest class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMakaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMaka();

        $this->assertSame('Maka', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('366', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Makasar', $script->unicodeName());
    }
}
