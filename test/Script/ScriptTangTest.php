<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTang class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptTangTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTang();

        $this->assertSame('Tang', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('520', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tangut', $script->unicodeName());
    }
}
