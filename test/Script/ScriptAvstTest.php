<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAvst class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptAvstTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAvst();

        $this->assertSame('Avst', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('134', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Avestan', $script->unicodeName());
    }
}
