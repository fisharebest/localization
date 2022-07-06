<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSogd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptSogdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSogd();

        $this->assertSame('Sogd', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('141', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Sogdian', $script->unicodeName());
    }
}
