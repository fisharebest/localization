<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOsge class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptOsgeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOsge();

        $this->assertSame('Osge', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('219', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Osage', $script->unicodeName());
    }
}
