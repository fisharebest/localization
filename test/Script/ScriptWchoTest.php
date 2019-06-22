<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWcho class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptWchoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptWcho();

        $this->assertSame('Wcho', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('283', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Wancho', $script->unicodeName());
    }
}
