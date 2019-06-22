<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSinh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptSinhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSinh();

        $this->assertSame('Sinh', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('348', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Sinhala', $script->unicodeName());
    }
}
