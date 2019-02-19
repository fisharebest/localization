<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptModi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptModiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptModi();

        $this->assertSame('Modi', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('324', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Modi', $script->unicodeName());
    }
}
