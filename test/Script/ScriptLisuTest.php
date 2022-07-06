<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLisu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptLisuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLisu();

        $this->assertSame('Lisu', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('399', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Lisu', $script->unicodeName());
    }
}
