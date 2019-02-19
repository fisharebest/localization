<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptMahj class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMahjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMahj();

        $this->assertSame('Mahj', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('314', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Mahajani', $script->unicodeName());
    }
}
