<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMroo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptMrooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMroo();

        $this->assertSame('Mroo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('264', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Mro', $script->unicodeName());
    }
}
